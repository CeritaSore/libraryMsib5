<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use App\Models\Penerbit;
use App\Models\Pengarang;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judulbuku = Buku::orderBy('idbuku', 'desc')->get();
        $listpengarang = Pengarang::all();
        $listpenerbit = Penerbit::all();
        $listkategori = Kategori::all();
        return view('backend.buku.index', compact('judulbuku', 'listkategori', 'listpenerbit', 'listpengarang'));
        return view('frontend.home',compact('judulbuku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //    

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBukuRequest $request)
    {


        // $request->validate([
        //     'judulbuku' => 'require|string|45',
        //     'pengarang_idpengarang' => 'required|max:20',
        //     'penerbit_idpenerbit' => 'required|max:20',
        //     'kategori_idkategori' => 'required|max:20',
        //     'foto' => 'image|file|max:2048'
        // ]);

        $data = $request->all();
        Buku::create([
            'judulbuku' => $data['nama'], 'pengarang_idpengarang' => $data['pengarang'], 'penerbit_idpenerbit' => $data['penerbit'], 'kategori_idkategori' => $data['kategori'], 'foto' => $data['foto']->store('publicImage'),
        ]);

        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBukuRequest  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBukuRequest $request, $idbuku)
    {
        // dd($request);
        // $request->validate([
        //     'judulbuku' => 'required|string|max:45',
        //     'pengarang_idpengarang'=> 'required|exists:pengarang,idpengarang',
        //     'penerbit_idpenerbit'=>'required|exists:penerbit,idpenerbit',
        //     'kategori_idkategori'=> 'required|exists:kategori,idkategori',
        // ]);
        $data1 = $request->all();
        $buku = Buku::find($idbuku);
        $buku->judulbuku = $data1['nama'];
        $buku->pengarang_idpengarang = $data1['pengarang'];
        $buku->penerbit_idpenerbit = $data1['penerbit'];
        $buku->kategori_idkategori = $data1['kategori'];
        $buku->save();
        return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy($idbuku)
    {
        //
        $buku = Buku::find($idbuku);
        $buku->delete();
        return redirect('/buku');
    }
}
