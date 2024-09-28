<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Admin Dashboard</title>
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
<header>
    <nav>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.cars.index') }}">Manage Cars</a>
        <a href="{{ route('admin.rentals.index') }}">Manage Rentals</a>
        <a href="{{ route('admin.customers.index') }}">Manage Customers</a>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <p>Admin Dashboard &copy; 2024</p>
</footer>

<script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
