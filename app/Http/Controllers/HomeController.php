<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // returns the home view
    public function index()
    {
        return view('partials.home_section');
    }
}
