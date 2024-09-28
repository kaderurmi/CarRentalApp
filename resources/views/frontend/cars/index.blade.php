@extends('layout.app')

@section('title', 'Available Cars')

@section('content')
    <h1>Browse Cars</h1>

    <form action="{{ route('cars.index') }}" method="GET">
        <input type="text" name="search" placeholder="Search by brand or model">
        <button type="submit">Search</button>
    </form>

    <div class="cars">
        @foreach($cars as $car)
            <div class="car">
                <img src="{{ asset('storage/'.$car->image) }}" alt="{{ $car->name }}">
                <h2>{{ $car->name }}</h2>
                <p>{{ $car->brand }} - {{ $car->model }} ({{ $car->year }})</p>
                <p>Type: {{ $car->car_type }}</p>
                <p>Price: ${{ $car->daily_rent_price }}/day</p>
                <a href="{{ route('frontend.cars.book', $car->id) }}">Book Now</a>
            </div>
        @endforeach
    </div>
@endsection

