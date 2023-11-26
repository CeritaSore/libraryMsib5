<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;


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
        $listkategori = Kategori::all();
        return view('backend.buku.index', compact('judulbuku','listkategori'));
        

        
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


/*
      //  $validated = $request->validate([
       //     'judulbuku' => 'required|max:45',
            // 'kategori_idkategori' => 'required|integer',
           //'textarea' => 'required|varchar',
           //'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|min:2|max:5000'
       // ],
    
        // [
        //     'judulbuku.required'=>'Judul Buku Wajib Diisi',
        //     'judulbuku.max'=>'Judul Buku Maksimal 45 karakter',
        //     'kategori_idkategori.required'=>'Kategori Wajib Memilih Salah Satu',
        //     'kategori_idkategori.integer'=>'Kategori Wajib Memilih Salah Satu',

        //     /*
        //     'textarea.required'=>'textarea Wajib Diisi',
        //     'textarea.varchar'=>'textarea Maksimal ... karakter',
        //     'foto.min'=>'Ukuran file kurang 2 KB',
        //     'foto.max'=>'Ukuran file melebihi 9000 KB',
        //     'foto.image'=>'File foto bukan gambar',
        //     'foto.mimes'=>'Extension file selain jpg,jpeg,png,gif,svg',
        //     
        // ]
   // );
       //Buku::create($request->all());
      // return redirect('/buku');
       
       //------------apakah user  ingin upload foto------------
       /if(!empty($request->foto)){
        $fileName = 'buku_'.date("Ymd_h-i-s").'.'.$request->foto->extension();
        //$fileName = $request->foto->getClientOriginalName();
        $request->foto->move(public_path('backend/assets/img'),$fileName);
    }
    else{
        $fileName = '';
    }
    //lakukan insert data dari request form dgn query builder
    try{
        DB::table('buku')->insert(
            [
                'judulbuku'=>$request->judulbuku,
                'kategori_idkategori'=>$request->kategori_idkategori,
                'textarea'=>$request->textarea,
                'foto'=>$fileName,
                //'created_at'=>now(),
            ]);
    
        return redirect()->route('buku.index')->with('success','Buku Baru Berhasil Disimpan');
    }
    catch (\Exception $e){
        //return redirect()->back()
        return redirect()->route('asset.index')
            ->with('error', 'Terjadi Kesalahan Saat Input Data!');
    }  
    */
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
    public function update(UpdateBukuRequest $request, $buku )
    {

   

        /* Validasi form input jika diperlukan
        $request->validate([
            'judulbuku' => 'required',
            'kategori_id' => 'required',
            'created_at' => 'required',
            'updated_at	' => 'required',
            // Sesuaikan dengan kolom lainnya
        ]);

        // Update data dalam database
        Buku::find($id)->update($request->all());

        return redirect()->route('buku.index')->with('success', 'Data berhasil diupdate.');
        */
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
