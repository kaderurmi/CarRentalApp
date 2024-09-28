@extends('admin.layout')

@section('title', 'Manage Cars')

@section('content')
    <h1>Manage Cars</h1>

    <a href="{{ route('admin.cars.create') }}">Add New Car</a>

    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Year</th>
            <th>Type</th>
            <th>Price (Daily)</th>
            <th>Availability</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
            <tr>
                <td>{{ $car->name }}</td>
                <td>{{ $car->brand }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->year }}</td>
                <td>{{ $car->car_type }}</td>
                <td>${{ $car->daily_rent_price }}</td>
                <td>{{ $car->availability ? 'Available' : 'Not Available' }}</td>
                <td>
                    <a href="{{ route('admin.cars.edit', $car->id) }}">Edit</a>
                    <form action="{{ route('admin.cars.destroy', $car->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
