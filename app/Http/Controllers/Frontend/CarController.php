<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $cars = Car::where('availability', true);

        // Apply filters if provided
        if ($request->filled('car_type')) {
            $cars->where('car_type', $request->car_type);
        }
        if ($request->filled('brand')) {
            $cars->where('brand', $request->brand);
        }
        if ($request->filled('min_price') && $request->filled('max_price')) {
            $cars->whereBetween('daily_rent_price', [$request->min_price, $request->max_price]);
        }

        $cars = $cars->get();
        return view('frontend.cars.index', compact('cars'));
    }

    public function show($id)
    {
        $car = Car::find($id);
        return view('frontend.cars.show', compact('car'));
    }
    public function book(Request $request, $id)
    {
        $car = Car::find($id);
        // Logic for checking availability and booking the car
        // Example:
        $rental = new Rental();
        $rental->user_id = auth()->id();
        $rental->car_id = $car->id;
        $rental->start_date = $request->start_date;
        $rental->end_date = $request->end_date;
        $rental->total_cost = $car->daily_rent_price * $request->days;
        $rental->save();

        return redirect()->route('frontend.rentals.index');
    }
}

