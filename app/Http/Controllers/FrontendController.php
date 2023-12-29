<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $title = 'home';
        $listbuku = Buku::all();
        return view('frontend.home', compact('title', 'listbuku'));
    }
    public function feature()
    {
        $listbuku = Buku::all();

        $title = 'feature';
        return view('frontend.feature', compact('title', 'listbuku'));
    }
    public function popular()
    {
        $listbuku = Buku::all();
        $kat1 = Buku::where('kategori_id', 1)->get();
        $kat2 = Buku::where('kategori_id', 2)->get();
        $kat3 = Buku::where('kategori_id', 3)->get();
        $kat4 = Buku::where('kategori_id', 4)->get();

        $title = 'popular';
        return view('frontend.pop', compact('title','listbuku','kat1','kat2','kat3','kat4'));
    }
    public function about()
    {
        $title = 'about';
        $listTeam = Team::all();
        return view('frontend.about', compact('title','listTeam'));
    }
}
