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

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/home', function () {
    return view('frontend.home');
});

Route::get('/buku', function () {
    return view('frontend.buku');
});

Route::get('/populer', function () {
    return view('frontend.porpuler');
});

