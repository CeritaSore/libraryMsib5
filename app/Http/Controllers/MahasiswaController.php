<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view("post", compact("mahasiswa"));
    }
    public function create()
    {
        return view("form");
    }
    public function store(Request $request)
    {

        Mahasiswa::create([
            "nama" => $request->nama,
            "nilai" => $request->nilai,
        ]);

        return redirect()->route("post");
    }
}
