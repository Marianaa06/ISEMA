<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        // Hanya halaman 'about' dan 'contact' yang bisa diakses tanpa login
        $this->middleware('auth')->except(['about', 'contact','tims','credit','privacy','karir','dokumentasi','term','harga','front','marketing','designer','backend']);
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
    
    public function tims()
    {
        return view('page.tims');
    }

    public function credit()
    {
        return view('page.credit');
    }

    public function privacy()
    {
        return view('page.privacy');
    }

    public function karir()
    {
        return view('page.karir');
    }

    public function dokumentasi()
    {
        return view('page.dokumentasi');
    }

    public function term()
    {
        return view('page.term');
    }


    public function harga()
    {
        return view('page.harga');
    }



    public function front()
    {
        return view('page.front');
    }

    public function marketing()
    {
        return view('page.marketing');
    }

    public function designer()
    {
        return view('page.designer');
    }

    public function backend()
    {
        return view('page.backend');
    }

}
