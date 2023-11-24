<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MeminjamController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\PengarangbukuController;
use App\Http\Controllers\PengarangController;
use App\Http\Controllers\SalinanbukuController;

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

Route::get('/bukunya', function () {
    return view('frontend.bukunya');
});

Route::get('/populer', function () {
    return view('frontend.populer');
});
//---------------------backend----------------------
Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

Route::get('/buku', function () {
    return view('backend.');
});

Route::resource('/buku',BukuController::class);
Route::resource('/kategori',KategoriController::class);
Route::resource('/meminjam',MeminjamController::class);
Route::resource('/penerbit',PenerbitController::class);
Route::resource('/pengarangbuku',PengarangbukuController::class);
Route::resource('/pengarang',PengarangController::class);
Route::resource('/salinanbuku',SalinanbukuController::class);