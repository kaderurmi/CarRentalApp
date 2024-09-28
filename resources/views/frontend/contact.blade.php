@extends('layout.app')
@section('content')
    <section class="pb-5">
        <div class="container pt-2">
            <div class="row align-items-center mb-5">
                <div class="col-12 col-md-10 col-lg-5 mb-5 mb-lg-0">
                    <h2 class=" fw-bold mb-3">Feel Free To Contact With Us </h2>
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
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-5 mb-5 mb-lg-0">
                    <h2 class="fw-bold mb-5">Reach Out to Us: Let's Connect and Explore Opportunities Together</h2>
                    <h4 class="fw-bold">Address</h4>
                    <p class="text-muted mb-5">1686 Geraldine Lane New York, NY 10013</p>
                    <h4 class="fw-bold">Contact Us</h4>
                    <p class="text-muted mb-1">hello@wireframes.org</p>
                    <p class="text-muted mb-0">+ 7-843-672-431</p>
                </div>
                <div class="col-12 col-lg-6 offset-lg-1 bg">
                    <form action="#">
                        <input class="form-control mb-3" type="text" placeholder="Name">
                        <input class="form-control mb-3" type="email" placeholder="E-mail">
                        <textarea class="form-control mb-3" name="message" cols="30" rows="10"
                                  placeholder="Your Message..."></textarea>
                        <button class="btn bg-gradient-primary w-100">Action</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
