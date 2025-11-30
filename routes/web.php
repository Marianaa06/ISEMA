<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KarirController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/product/{any?}', function () {
    return view('page.product');
})->where('any', '.*');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/tims', [HomeController::class, 'tims'])->name('tims');
Route::get('/credit', [HomeController::class, 'credit'])->name('credit');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/karir', [HomeController::class, 'karir'])->name('karir');
Route::get('/dokumentasi', [HomeController::class, 'dokumentasi'])->name('dokumentasi');
Route::get('/term', [HomeController::class, 'term'])->name('term');


Route::get('/harga', [HomeController::class, 'harga'])->name('harga');


Route::get('/front', [HomeController::class, 'front'])->name('front');
Route::get('/marketing', [HomeController::class, 'marketing'])->name('marketing');
Route::get('/designer', [HomeController::class, 'designer'])->name('designer');
Route::get('/backend', [HomeController::class, 'backend'])->name('backend');

use App\Http\Controllers\ContactController;

Route::post('/kontak/kirim', [ContactController::class, 'send'])->name('kontak.kirim');

Route::post('/job-apply', [KarirController::class, 'apply'])->name('job.apply');

