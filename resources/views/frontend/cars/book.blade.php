@extends('layout.app')

@section('title', 'Book Car')

@section('content')
    <h1>Book Car - {{ $car->name }}</h1>

    <form action="{{ route('frontend.cars.book', $car->id) }}" method="POST">
        @csrf
        <div>
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" required>
        </div>
        <div>
            <label for="end_date">End Date</label>
            <input type="date" name="end_date" required>
        </div>
        <button type="submit">Book Car</button>
    </form>
@endsection
