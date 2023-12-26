<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Peminjaman;
use PDF;

class PDFController extends Controller
{
    public function PDFBuku()
    {
        $listbuku = Buku::all();
 
        $pdf = PDF::loadView('backend.pdf.pdfBuku', compact('listbuku'));

        return $pdf->download('buku.pdf');
    }

    public function PDFPeminjaman()
    {
        $peminjaman = Peminjaman::all();

        // Load PDF view
        $pdf = \PDF::loadView('backend.pdf.pdfPeminjaman', compact('peminjaman'));

        // Download or display in the browser
        return $pdf->download('riwayat_peminjaman.pdf');
    }

}
