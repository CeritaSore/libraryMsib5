<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\FrontendbukuController;
use App\Http\Controllers\KategoriController;

use App\Http\Controllers\PenerbitController;

use App\Http\Controllers\PengarangController;

use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Auth;



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

Route::get('/', [FrontendbukuController::class, 'indexhome']);

Route::get('/bukunya', [FrontendbukuController::class, 'indexFeatured']);

Route::get('/populer', [FrontendbukuController::class, 'indexpopuler']);
// peminjaman
Route::get('/pinjam', function () {
    return view('backend.pinjam.index');
})->middleware('auth');


//---------------------backend----------------------
Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware('auth');

Route::get('/team', [TeamController::class, 'index']);

//-----------------table buku------------------
Route::get('/buku', [BukuController::class, 'index'])->middleware('auth');
Route::post('/buku', [BukuController::class, 'store'])->name('simpandata0')->middleware('auth');
Route::put('/buku/{idbuku}', [BukuController::class, 'update'])->name('ubahdata0')->middleware('auth');
Route::delete('/buku/{idbuku}', [BukuController::class, 'destroy'])->name('hapusdata0')->middleware('auth');

//-----------------table kategori------------------
Route::get('/kategori', [KategoriController::class, 'index'])->middleware('auth');
Route::post('/kategori', [KategoriController::class, 'store'])->name('simpandata1')->middleware('auth');
Route::put('/kategori/{idkategori}', [KategoriController::class, 'update'])->name('ubahdata1')->middleware('auth');
Route::delete('/kategori/{idkategori}', [KategoriController::class, 'destroy'])->name('hapusdata1')->middleware('auth');


//-----------------table pengarang------------------
Route::get('/pengarang', [PengarangController::class, 'index'])->middleware('auth');
Route::post('/pengarang', [PengarangController::class, 'store'])->name('simpandata')->middleware('auth');
Route::put('/pengarang/{idpengarang}', [PengarangController::class, 'update'])->name('ubahdata')->middleware('auth');
Route::delete('/pengarang/{idpengarang}', [PengarangController::class, 'destroy'])->name('hapusdata')->middleware('auth');


//-----------------table penerbit------------------
Route::get('/penerbit', [PenerbitController::class, 'index'])->middleware('auth');
Route::post('/penerbit', [PenerbitController::class, 'store'])->name('simpandata2')->middleware('auth');
Route::put('/penerbit/{idpenerbit}', [PenerbitController::class, 'update'])->name('ubahdata2')->middleware('auth');
Route::delete('/penerbit/{idpenerbit}', [PenerbitController::class, 'destroy'])->name('hapusdata2')->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/afterregister', function () {
    return view('backend.afterRegister');
});

Route::get('/users', function () {
    return view('backend.user.index');
});

Route::get('/profile', function () {
    return view('backend.profile');
});
