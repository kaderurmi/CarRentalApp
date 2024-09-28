@extends('layout.app')
@section('content')
    <section class="pb-5">
        <div class="container pt-2">
            <div class="row align-items-center mb-5">
                <div class="col-12 col-md-10 col-lg-5 mb-5 mb-lg-0">
                    <h2 class=" fw-bold mb-3">You Can Know About Us </h2>
                    <p class="lead text-muted mb-4">Discover streamlined transactions, real-time inventory management,
                        and actionable insights in one intuitive app.</p>
                    <div class="d-flex flex-wrap"><a class="btn bg-gradient-primary me-2 mb-2 mb-sm-0"
                                                     href="{{url('/register')}}">Start Sale</a>
                        <a class="btn bg-gradient-primary mb-2 mb-sm-0" href="{{url('/login')}}">Login</a></div>
                </div>
                <div class="col-12 col-lg-6 offset-lg-1 bgg">
                    <img class="img-fluid" src="{{asset('/images/H_car.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
