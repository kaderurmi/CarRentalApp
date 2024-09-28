@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard Overview</h1>

    <div class="stats">
        <p>Total Cars: {{ $totalCars }}</p>
        <p>Available Cars: {{ $availableCars }}</p>
        <p>Total Rentals: {{ $totalRentals }}</p>
        <p>Total Earnings: ${{ $totalEarnings }}</p>
    </div>
@endsection

