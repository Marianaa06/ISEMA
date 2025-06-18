<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['about']);
    }

    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('page.about');
    }
}
