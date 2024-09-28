@extends('layout.app')
@section('content')
    <section class="pb-5">
        <div class="container pt-2">
            <div class="row align-items-center mb-5">
                <div class="col-12 col-md-10 col-lg-5 mb-5 mb-lg-0">
                    <h2 class=" fw-bold mb-3">Elevate Your Car Rental with Our Powerful Application! </h2>
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


    <section class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto text-center">
                    <span class="text-muted">Happy Clients</span>
                    <p class="lead text-muted">Spotlight on Our Exceptional Client Success</p>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 p-3">
                    <div class="card px-0 text-center">
                        <img class=" card-img-top mb-3 w-100" src="{{asset('/images/man.jpg')}}" alt="">
                        <h5>Danny Bailey</h5>
                        <p class="text-muted mb-4">CEO &amp; Founder</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 p-3">
                    <div class="card px-0 text-center">
                        <img class=" card-img-top mb-3 w-100" src="{{asset('/images/man.jpg')}}" alt="">
                        <h5>Danny Bailey</h5>
                        <p class="text-muted mb-4">CEO &amp; Founder</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 p-3">
                    <div class="card px-0 text-center">
                        <img class=" card-img-top mb-3 w-100" src="{{asset('/images/man.jpg')}}" alt="">
                        <h5>Danny Bailey</h5>
                        <p class="text-muted mb-4">CEO &amp; Founder</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 p-3">
                    <div class="card px-0 text-center">
                        <img class=" card-img-top mb-3 w-100" src="{{asset('/images/man.jpg')}}" alt="">
                        <h5>Danny Bailey</h5>
                        <p class="text-muted mb-4">CEO &amp; Founder</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br/>
@endsection
