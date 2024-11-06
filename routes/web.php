<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AuthController;

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



Route::get('/',[FrontController::class,'index'])->name('front.main');
Route::get('/about',[FrontController::class,'about'])->name('front.about');
Route::get('/services',[FrontController::class,'services'])->name('front.services');
Route::get('/blog',[FrontController::class,'blog'])->name('front.blog');
Route::get('/feature',[FrontController::class,'feature'])->name('front.feature');
Route::get('/cars',[FrontController::class,'cars'])->name('front.cars');
Route::get('/team',[FrontController::class,'team'])->name('front.team');
Route::get('/testimonial',[FrontController::class,'testimonial'])->name('front.testimonial');
Route::get('/404',[FrontController::class,'404'])->name('front.404');
Route::get('/contact',[FrontController::class,'contact'])->name('front.contact');




