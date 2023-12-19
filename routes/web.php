<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendbukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PenerbitController;

use App\Http\Controllers\PengarangController;

use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
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
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->middleware('auth');
Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create')->middleware('auth');
Route::post('/peminjaman/store', [PeminjamanController::class, 'store'])->name('peminjaman.store')->middleware('auth');
Route::post('/peminjaman/kembalikan/{id}', [PeminjamanController::class, 'kembalikan'])->name('peminjaman.kembalikan');


//---------------------backend----------------------
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/team', [TeamController::class, 'index']);

//-----------------table buku------------------
Route::get('/buku', [BukuController::class, 'index'])->middleware('auth');
Route::post('/buku', [BukuController::class, 'store'])->name('simpandata0')->middleware('auth');
Route::put('/buku/{idbuku}', [BukuController::class, 'update'])->name('ubahdata0')->middleware('auth');
Route::delete('/buku/{idbuku}', [BukuController::class, 'destroy'])->name('hapusdata0')->middleware('auth');
Route::get('/generate-pdf', [BukuController::class, 'generatePdf'])->name('buku.pdf')->middleware('auth');
Route::get('/generate-excel', [BukuController::class, 'generateExcel'])->name('buku.excel')->middleware('auth');


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


//-----------------table user------------------
Route::get('/user', [UserController::class, 'index'])->middleware('auth');
Route::post('/user', [UserController::class, 'store'])->name('simpandata10')->middleware('auth');
Route::put('/user/{id}', [UserController::class, 'update'])->name('ubahdata10')->middleware('auth');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('hapusdata10')->middleware('auth');

//Route::resource('/user',UserController::class)->middleware('auth');

// // Rute untuk Pengembalian
// Route::get('/pengembalian', [PengembalianController::class, 'index'])->name('pengembalian.index');
// Route::get('/pengembalian/create', [PengembalianController::class, 'create'])->name('pengembalian.create');
// Route::post('/pengembalian/store', [PengembalianController::class, 'store'])->name('pengembalian.store');

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
