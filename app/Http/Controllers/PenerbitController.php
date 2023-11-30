<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use App\Http\Requests\StorePenerbitRequest;
use App\Http\Requests\UpdatePenerbitRequest;


class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $namapenerbit = Penerbit::orderBy('idpenerbit', 'desc')->get();
        return view('backend.penerbit.index', compact('namapenerbit'));
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
     * @param  \App\Http\Requests\StorePenerbitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePenerbitRequest $request)
    {
        //
        try{
         Penerbit::create([
            'namapenerbit' => $request->input('nama')
        ]);
        return redirect('/penerbit')->with('Success','Data Penerbit baru berhasil ditambahkan');
        }
        catch(\Exception $e){
            return redirect('/penerbit')->with('Error','Terjadi kesalahan saat input data');
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function show(Penerbit $penerbit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function edit(Penerbit $penerbit)
    {
        //
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenerbitRequest  $request
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePenerbitRequest $request, $idpenerbit)
    {
        //
        $request->validate([
            'nama' => 'required|string|max:45',
        ]);
        $penerbit = Penerbit::find($idpenerbit);
        $penerbit->namapenerbit = $request->nama;
        $penerbit->save();
        return redirect('/penerbit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function destroy($idpenerbit)
    {
        //
        $penerbit = Penerbit::find($idpenerbit);
        $penerbit->delete();
        return redirect('/penerbit');
    }
}
