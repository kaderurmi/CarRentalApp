<?php

namespace App\Http\Controllers\Admin;
use App\Models\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        return view('admin.cars.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer',
            'car_type' => 'required|string',
            'daily_rent_price' => 'required|numeric',
            'availability' => 'required|boolean',
            'image' => 'required|image'
        ]);

        $car = Car::create($validated);

        return redirect()->route('admin.cars.index')->with('success', 'Car added successfully');
    }

    public function edit($id)
    {
        $car = Car::find($id);
        return view('admin.cars.edit', compact('car'));
    }


    public function update(Request $request, $id)
    {
        $car = Car::find($id);
        $car->update($request->all());
        return redirect()->route('admin.cars.index');
    }

    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();

        return redirect()->route('admin.cars.index')->with('success', 'Car deleted successfully');
    }
}
