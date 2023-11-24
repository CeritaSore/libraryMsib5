<?php

namespace App\Http\Controllers;

use App\Models\Pengarang;
use App\Http\Requests\StorePengarangRequest;
use App\Http\Requests\UpdatePengarangRequest;

class PengarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listpengarang = Pengarang::all();
        return view('backend.pengarang.index', compact('listpengarang'));
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
     * @param  \App\Http\Requests\StorePengarangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePengarangRequest $request)
    {
        //
        Pengarang::create([
            'namapengarang' => $request->input('nama')
        ]);
        return redirect('/pengarang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengarang  $pengarang
     * @return \Illuminate\Http\Response
     */
    public function show(Pengarang $pengarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengarang  $pengarang
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengarang $pengarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePengarangRequest  $request
     * @param  \App\Models\Pengarang  $pengarang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePengarangRequest $request, $idpengarang)
    {
        //
        $request->validate([
            'nama' => 'required|string|max:45',
        ]);
        $pengarang = Pengarang::find($idpengarang);
        $pengarang->namapengarang = $request->nama;
        $pengarang->save();
        return redirect('/pengarang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengarang  $pengarang
     * @return \Illuminate\Http\Response
     */
    public function destroy($idpengarang)
    {
        //
        $pengarang = Pengarang::find($idpengarang);
        $pengarang->delete();
        return redirect('/pengarang');
    }
}
