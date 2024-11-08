<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::middleware('auth')->get('/dashboard', function () {
       return view('dashboard');
     })->name('dashboard');



Route::get('/',[App\Http\Controllers\FrontController::class,'index'])->name('front.main');
Route::get('/about',[App\Http\Controllers\FrontController::class,'about'])->name('front.about');
Route::get('/services',[App\Http\Controllers\FrontController::class,'services'])->name('front.services');
Route::get('/blog',[App\Http\Controllers\FrontController::class,'blog'])->name('front.blog');
Route::get('/feature',[App\Http\Controllers\FrontController::class,'feature'])->name('front.feature');
Route::get('/cars',[App\Http\Controllers\FrontController::class,'cars'])->name('front.cars');
Route::get('/team',[App\Http\Controllers\FrontController::class,'team'])->name('front.team');
Route::get('/testimonial',[App\Http\Controllers\FrontController::class,'testimonial'])->name('front.testimonial');
Route::get('/404',[App\Http\Controllers\FrontController::class,'404'])->name('front.404');
Route::get('/contact',[App\Http\Controllers\FrontController::class,'contact'])->name('front.contact');


Route::get('/booking', [CarController::class, 'showBookingForm'])->name('booking.form');




Route::get('/car-reservation', [CarController::class, 'index'])->name('car.reservation');
Route::post('/car-reservation', [CarController::class, 'store'])->name('car.store');






