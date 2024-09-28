@extends('admin.layout')

@section('title', isset($car) ? 'Edit Car' : 'Add Car')

@section('content')
    <h1>{{ isset($car) ? 'Edit Car' : 'Add Car' }}</h1>

    <form action="{{ isset($car) ? route('admin.cars.update', $car->id) : route('admin.cars.store') }}" method="POST">
        @csrf
        @if(isset($car))
            @method('PUT')
        @endif
        <div>
            <label for="name">Car Name</label>
            <input type="text" name="name" value="{{ isset($car) ? $car->name : old('name') }}">
        </div>
        <div>
            <label for="brand">Brand</label>
            <input type="text" name="brand" value="{{ isset($car) ? $car->brand : old('brand') }}">
        </div>
        <div>
            <label for="model">Model</label>
            <input type="text" name="model" value="{{ isset($car) ? $car->model : old('model') }}">
        </div>
        <div>
            <label for="year">Year</label>
            <input type="number" name="year" value="{{ isset($car) ? $car->year : old('year') }}">
        </div>
        <div>
            <label for="car_type">Type</label>
            <input type="text" name="car_type" value="{{ isset($car) ? $car->car_type : old('car_type') }}">
        </div>
        <div>
            <label for="daily_rent_price">Daily Rent Price</label>
            <input type="text" name="daily_rent_price" value="{{ isset($car) ? $car->daily_rent_price : old('daily_rent_price') }}">
        </div>
        <div>
            <label for="availability">Availability</label>
            <select name="availability">
                <option value="1" {{ isset($car) && $car->availability ? 'selected' : '' }}>Available</option>
                <option value="0" {{ isset($car) && !$car->availability ? 'selected' : '' }}>Not Available</option>
            </select>
        </div>
        <button type="submit">{{ isset($car) ? 'Update Car' : 'Add Car' }}</button>
    </form>
@endsection
