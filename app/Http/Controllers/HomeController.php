<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        // Hanya halaman 'about' dan 'contact' yang bisa diakses tanpa login
        $this->middleware('auth')->except(['about', 'contact']);
    }

    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('page.about');
    }

    public function contact()
    {
        return view('page.contact');
    }
    
}
