<?php

namespace App\Http\Controllers;

use App\Models\Buku;
class FrontendbukuController extends Controller{
    public function indexhome() {
        $listbuku = Buku::all();
        $title = 'home';
        return view('frontend.home',compact('listbuku','title'));
    }
    public function indexpopuler() {
        $listbuku = Buku::all();
        $title = 'populer';
        return view('frontend.populer',compact('listbuku','title'));
        
    }
    public function indexFeatured() {
        $listbuku = Buku::all();
        $title = 'featured';
        return view('frontend.bukunya',compact('listbuku','title'));

    }
}