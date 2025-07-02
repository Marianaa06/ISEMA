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
    return view('page.product'); // Blade kosong khusus Vue
})->where('any', '.*');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

use App\Http\Controllers\ContactController;

Route::post('/kontak/kirim', [ContactController::class, 'send'])->name('kontak.kirim');
