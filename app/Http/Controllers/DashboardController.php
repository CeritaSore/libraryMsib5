<?php
// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;
use App\Models\Pengarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $ar_buku = Buku::all('idbuku')->count();
        $ar_kategori = Kategori::all('idkategori')->count();
        $ar_pengarang = Pengarang::all('idpengarang')->count();
        $ar_penerbit = Penerbit::all('idpenerbit')->count();
        
        // grafik bar
        $grafik_bar = DB::table('buku')
        ->join('kategori', 'kategori.idkategori', '=', 'buku.kategori_idkategori')
        ->select('kategori.listkategori', DB::raw('COUNT(buku.kategori_idkategori) AS jml'))
        ->groupBy('kategori.listkategori')
        ->get();
        
        // table data buku
        $query = 
        'SELECT
             buku.idbuku AS id_buku,
             buku.judulbuku AS judul_buku,
             pengarang.namapengarang AS nama_pengarang,
                 penerbit.namapenerbit AS nama_penerbit
             FROM
                 buku
         JOIN pengarang ON buku.idbuku = pengarang.idpengarang
         JOIN penerbit ON penerbit.idpenerbit = penerbit.idpenerbit';

         $data_buku = DB::select($query);
        return view('backend.dashboard', 
        compact('ar_buku','ar_kategori','ar_pengarang','ar_penerbit','grafik_bar','data_buku')
        );
    }
}
