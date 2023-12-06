<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use App\Models\Penerbit;
use App\Models\Pengarang;
use Illuminate\Support\Facades\Storage;



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
        return view('frontend.home', compact('judulbuku'));
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

        // dd($request);
        $request->validate([
            'nama' => 'required|string|max:45',
            'pengarang' => 'required|exists:pengarang,idpengarang',
            'penerbit' => 'required|exists:penerbit,idpenerbit',
            'kategori' => 'required|exists:kategori,idkategori',
            'foto' => 'image|file|max:2048',
            'deskripsi' => 'required|string|max:100',
        ]);
        if ($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('storage');
        }
        Buku::create([
            'judulbuku' => $request->input('nama'),
            'pengarang_idpengarang' => $request->input('pengarang'),
            'penerbit_idpenerbit' => $request->input('penerbit'),
            'kategori_idkategori' => $request->input('kategori'),
            'foto' => $request->file('foto')->store('publicImage'),
            'deskripsi' => $request->input('deskripsi')
        ]);

        // Buku::create([
        //     'judulbuku' => $data['nama'], 'pengarang_idpengarang' => $data['pengarang'], 'penerbit_idpenerbit' => $data['penerbit'], 'kategori_idkategori' => $data['kategori'], 'foto' => $data['foto']->store('publicImage'), 'deskripsi' => $data['deskripsi'],
        // ]);

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
        $request->validate([
            'nama' => 'required|string|max:45',
            'pengarang' => 'required|exists:pengarang,idpengarang',
            'penerbit' => 'required|exists:penerbit,idpenerbit',
            'kategori' => 'required|exists:kategori,idkategori',
            'foto' => 'image|file|max:2048',
        ]);

        $buku = Buku::find($idbuku);
        $buku->judulbuku = $request->nama;
        $buku->pengarang_idpengarang = $request->pengarang;
        $buku->penerbit_idpenerbit = $request->penerbit;
        $buku->kategori_idkategori = $request->kategori;
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($buku->foto) {
                Storage::delete('storage/' . $buku->foto);
            }
            $buku->foto = $request->file('foto')->store('publicImage');
            // Upload foto baru
        }
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
