<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/', function () {
    return view('Dashboard.home');
});

Route::get('/aboutus', function () {
    return view('Dashboard.aboutUs');
});

Route::get('/news', function () {
    return view('Dashboard.news');
});

Route::get('/booking', function () {
    return view('Dashboard.bookingPage');
});