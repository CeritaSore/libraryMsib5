<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function countBuku()
    {
        $zonaWaktu = Carbon::now('Asia/Jakarta');
        $waktusaatini = $zonaWaktu->format('H:i');
        $totalbuku = Buku::count();
        $totalPending = Peminjaman::where('status_peminjaman','pending')->count();
        $totalApproved = Peminjaman::where('status_peminjaman','approved')->count();
        $totalReturn = Peminjaman::where('status_peminjaman','returned')->count();
        return view('backend.home', compact('totalbuku','totalPending','totalApproved','totalReturn','waktusaatini'));
    }
}
