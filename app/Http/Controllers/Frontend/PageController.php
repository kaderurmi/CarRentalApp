<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;


class PageController extends Controller
{
    public function HomePage()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function rentals()
    {
        return view('frontend.rentals');
    }
}
