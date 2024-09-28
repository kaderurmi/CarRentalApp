<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>RentalCar</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/favicon.ico')}}" />
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/toastify.min.css')}}" rel="stylesheet" />
    <script src="{{asset('js/toastify-js.js')}}"></script>
    <script src="{{asset('js/axios.min.js')}}"></script>
    <script src="{{asset('js/config.js')}}"></script>
</head>

<body>
<nav class="navbar sticky-top shadow-sm navbar-expand-lg navbar-light py-2">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img class="img-fluid logo" src="{{asset('/images/CarRental.png')}}" alt="" width="96px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header01" aria-controls="header01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="header01">
            <ul class="navbar-nav ms-auto mt-3 mt-lg-0 mb-3 mb-lg-0 me-4">
                <li class="nav-item me-4"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                <li class="nav-item me-4"><a class="nav-link" href="{{url('/about')}}">About</a></li>
                <li class="nav-item me-4"><a class="nav-link" href="#">Rentals</a></li>
                <!--  <li class="nav-item me-4"><a class="nav-link" href="#">Cars</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Booking</a></li> -->
                <li class="nav-item me-4"><a class="nav-link" href="{{url('/contact')}}">Contact</a></li>

            </ul>
            <div><a class="btn mt-3 bg-gradient-primary" href="{{url('/login')}}">Login</a></div>
        </div>
    </div>
</nav>
<div id="loader" class="LoadingOverlay d-none">
    <div class="Line-Progress">
        <div class="indeterminate"></div>
    </div>
</div>

<div>
    @yield('content')
</div>


<footer class="py-5 bg-light">
    <div class="container text-center pb-5 border-bottom">
        <a class="d-inline-block mx-auto mb-4" href="/">
            <img class="img-fluid logo"src="{{asset('/images/CarRental.png')}}" alt="" width="96px">
        </a>
        <ul class="d-flex flex-wrap justify-content-center align-items-center list-unstyled mb-4">
            <li class="link-secondary me-4"><a href="{{url('/about')}}">About</a></li>
            <li class="link-secondary me-4"><a href="{{url('/contact')}}">Contact</a></li>
           <li><a class="link-secondary me-4" href="#">Cars</a></li>
            <li><a class="link-secondary" href="#">Booking</a></li>
        </ul>
        <div>
            <a class="d-inline-block me-4" href="#">
                <img src="{{asset('/images/facebook.svg')}}">
            </a>
            <a class="d-inline-block me-4" href="#">
                <img src="{{asset('/images/twitter.svg')}}">
            </a>
            <a class="d-inline-block me-4" href="#">
                <img src="{{asset('/images/github.svg')}}">
            </a>
            <a class="d-inline-block me-4" href="#">
                <img src="{{asset('/images/instagram.svg')}}">
            </a>
            <a class="d-inline-block" href="#">
                <img src="{{asset('/images/linkedin.svg')}}">
            </a>
        </div>
    </div>
    <div class="mb-5"></div>
    <div class="container">
        <p class="text-center">All rights reserved © Md Fazlul Kader 2023-2024</p>
    </div>
</footer>

<script src="{{asset('js/bootstrap.bundle.js')}}"></script>

</body>
</html>
