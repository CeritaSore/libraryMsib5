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

//Route::resource('/buku', BukuController::class);
//Route::resource('/kategori', KategoriController::class);
Route::resource('/meminjam', MeminjamController::class);
//Route::resource('/penerbit', PenerbitController::class);
Route::resource('/pengarangbuku', PengarangbukuController::class);
// Route::resource('/pengarang',PengarangController::class);
Route::resource('/salinanbuku', SalinanbukuController::class);

//-----------------table buku------------------
Route::get('/buku', [BukuController::class, 'index']);
Route::post('/buku', [BukuController::class, 'store'])->name('simpandata0');
Route::put('/buku/{idbuku}', [BukuController::class, 'update'])->name('ubahdata0');
Route::delete('/buku/{idbuku}', [BukuController::class, 'destroy'])->name('hapusdata0');

//-----------------table kategori------------------
Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori', [KategoriController::class, 'store'])->name('simpandata1');
Route::put('/kategori/{idkategori}', [KategoriController::class, 'update'])->name('ubahdata1');
Route::delete('/kategori/{idkategori}', [KategoriController::class, 'destroy'])->name('hapusdata1');


//-----------------table pengarang------------------
Route::get('/pengarang', [PengarangController::class, 'index']);
Route::post('/pengarang', [PengarangController::class, 'store'])->name('simpandata');
Route::put('/pengarang/{idpengarang}', [PengarangController::class, 'update'])->name('ubahdata');
Route::delete('/pengarang/{idpengarang}', [PengarangController::class, 'destroy'])->name('hapusdata');


//-----------------table penerbit------------------
Route::get('/penerbit', [PenerbitController::class, 'index']);
Route::post('/penerbit', [PenerbitController::class, 'store'])->name('simpandata2');
Route::put('/penerbit/{idpenerbit}', [PenerbitController::class, 'update'])->name('ubahdata2');
Route::delete('/penerbit/{idpenerbit}', [PenerbitController::class, 'destroy'])->name('hapusdata2');