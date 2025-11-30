<?php

// use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\HomeController;


use Illuminate\Support\Facades\Route;


Route::get('/about', function () {
    return view('page.about');
})->name('about');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product/{any?}', function () {
    return view('page.product');
})->where('any', '.*');
Auth::routes();