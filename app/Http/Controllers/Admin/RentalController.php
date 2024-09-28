<?php

namespace App\Http\Controllers\Admin;

use App\Models\Rental;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RentalController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $rentals = Rental::with('car', 'user')->get();
        return view('admin.rentals.index', compact('rentals'));
    }


    public function create()
    {
        // Load necessary data like cars and customers
        return view('admin.rentals.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'total_cost' => 'required|numeric',
        ]);

        $rental = Rental::create($validated);

        return redirect()->route('admin.rentals.index')->with('success', 'Rental added successfully');
    }

    public function edit($id)
    {
        $rental = Rental::find($id);
        return view('admin.rentals.edit', compact('rental'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'total_cost' => 'required|numeric',
        ]);

        $rental = Rental::find($id);
        $rental->update($validated);

        return redirect()->route('admin.rentals.index')->with('success', 'Rental updated successfully');
    }

    public function destroy($id)
    {
        $rental = Rental::find($id);
        $rental->delete();

        return redirect()->route('admin.rentals.index')->with('success', 'Rental deleted successfully');
    }
}
