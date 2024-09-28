<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Rental;
use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class RentalController extends Controller
{
    public function book(Request $request, $car_id)
    {
        $car = Car::find($car_id);

        $validated = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Check if car is available during the requested period
        $conflict = Rental::where('car_id', $car->id)
            ->where('start_date', '<=', $request->end_date)
            ->where('end_date', '>=', $request->start_date)
            ->exists();

        if ($conflict) {
            return back()->with('error', 'Car is not available for the selected dates.');
        }

        $total_cost = $car->daily_rent_price * (strtotime($request->end_date) - strtotime($request->start_date)) / 86400;

        $rental = Rental::create([
            'user_id' => Auth::id(),
            'car_id' => $car->id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_cost' => $total_cost,
        ]);

        return redirect()->route('frontend.rentals.index')->with('success', 'Booking successful');
    }

    public function history()
    {
        $rentals = Auth::user()->rentals()->with('car')->get();
        return view('frontend.rentals.history', compact('rentals'));
    }

    public function cancel($id)
    {
        $rental = Rental::where('id', $id)->where('user_id', Auth::id())->first();
        if (now()->lt($rental->start_date)) {
            $rental->delete();
            return redirect()->route('frontend.rentals.history')->with('success', 'Rental canceled successfully');
        }

        return redirect()->route('frontend.rentals.history')->with('error', 'Cannot cancel an ongoing rental');
    }
}
