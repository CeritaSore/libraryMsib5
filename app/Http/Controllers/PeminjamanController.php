<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\User;
use Carbon\Carbon;

class PeminjamanController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan daftar peminjaman
        $peminjaman = Peminjaman::all();
        $listuser = User::all();
        $buku = Buku::all();

        return view('backend.pinjam.status', compact('buku', 'peminjaman','listuser'));
    }
    public function store(Request $request)
    {
        // Validasi input form
        // dd($request->buku);

        Peminjaman::create([
            'user_id' => $request->iduser,
            'buku_id' => $request->buku,
            'tanggal_pengambilan' => $request->pengambilan,
            'tanggal_peminjaman' => $request->peminjaman,

        ]);

        $statusBuku = Buku::find($request->buku);
        // dd($statusBuku->status);
        $statusBuku->status = 'sedang dipinjam';
        $statusBuku->save();
        return redirect('/buku');
    }
    // public function store(Request $request)
    // {
    //     // Validasi input form
    //     // dd($request->buku);

    //     Peminjaman::create([
    //         'user_id' => $request->iduser,
    //         'buku_id' => $request->buku,
    //         'tanggal_pengambilan' => $request->pengambilan,
    //         'tanggal_peminjaman' => $request->peminjaman,

    //     ]);

    //     $statusbuku = Buku::find($idbuku);
    //     if ($statusbuku) {
    //         $statusbuku->update([
    //             'status' => 'sedang dipinjam',
    //         ]);
    //     };
    //     return redirect('/buku');
    //     // $request->validate([
    //     //     'buku_id' => 'required|exists:buku,idbuku',
    //     //     'tanggal_pengambilan' => 'required|date',
    //     // ]);

    //     // // Logika untuk menyimpan data peminjaman ke database
    //     // $peminjaman = Peminjaman::create([
    //     //     'buku_id' => $request->buku_id,
    //     //     'tanggal_peminjaman' => now(),
    //     //     'tanggal_pengambilan' => $request->tanggal_pengambilan,
    //     //     'user_id' => $request->user_id,

    //     // ]);

    //     // // Logika untuk mengurangi stok buku yang dipinjam
    //     // $buku = Buku::find($request->buku_id);
    //     // $buku->stok -= 1;
    //     // // $buku->status = 'tersedia';
    //     // $buku->save();

    //     // // Periksa apakah peminjaman telah melewati 7 hari
    //     // $batasPeminjaman = Carbon::parse($peminjaman->tanggal_peminjaman)->addDays(7);
    //     // if (now()->greaterThan($batasPeminjaman)) {
    //     //     return redirect()->route('buku.index')
    //     //         ->with('error', 'Batas peminjaman sudah melewati 7 hari.');
    //     // }

    //     // return redirect('/buku')->with('success', 'Buku berhasil dipinjam. Batas pengembalian: ' . $batasPeminjaman->format('Y-m-d'));
    // }

    public function kembalikan($id)
    {
        $peminjaman = Peminjaman::find($id);

        // Logika pengembalian buku
        $peminjaman->tanggal_pengembalian = now();
        $peminjaman->save();

        // Logika untuk menambah stok buku yang dikembalikan
        $buku = Buku::find($peminjaman->buku_id);
        $buku->stok += 1;
        // $buku->status = 'tersedia'; 
        $buku->save();

        return redirect('/buku')->with('success', 'Buku berhasil dikembalikan.');
    }
}
