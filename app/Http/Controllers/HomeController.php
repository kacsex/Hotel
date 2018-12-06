<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function booking()
    {
        return view('booking');
    }

    public function rooms()
    {
        return view('rooms');
    }

    public function amenities()
    {
        return view('amenities');
    }

    public function dining()
    {
        return view('dining');
    }

    public function contact()
    {
        return view('contact');
    }
}
