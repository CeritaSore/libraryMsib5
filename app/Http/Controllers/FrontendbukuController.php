<?php

namespace App\Http\Controllers;

use App\Models\Buku;
class FrontendbukuController extends Controller{
    public function indexhome() {
        $listbuku = Buku::all();
        return view('frontend.home',compact('listbuku'));
    }
    public function indexpopuler() {
        $listbuku = Buku::all();
        return view('frontend.populer',compact('listbuku'));
        
    }
}