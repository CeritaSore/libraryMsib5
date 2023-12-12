<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index()
    {
        return Book::all();
    }

    public function show($id)
    {
        return Book::find($id);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required|string|max:45',
            'pengarang' => 'required|exists:pengarang,idpengarang',
            'penerbit' => 'required|exists:penerbit,idpenerbit',
            'kategori' => 'required|exists:kategori,idkategori',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        $book = Book::create([
        'judulbuku' => $request->input('nama'),
        'pengarang_idpengarang' => $request->input('pengarang'),
        'penerbit_idpenerbit' => $request->input('penerbit'),
        'kategori_idkategori' => $request->input('kategori'),
        ]);

        return new BookResource(true, 'buku berhasil ditambahkan!', $book);
    }}

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required|string|max:45',
            'pengarang' => 'required|exists:pengarang,idpengarang',
            'penerbit' => 'required|exists:penerbit,idpenerbit',
            'kategori' => 'required|exists:kategori,idkategori',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        $book = Book::whereId($id)->update([
        'judulbuku' => $request->input('nama'),
        'pengarang_idpengarang' => $request->input('pengarang'),
        'penerbit_idpenerbit' => $request->input('penerbit'),
        'kategori_idkategori' => $request->input('kategori'),
        ]);

        return new BookResource(true, 'buku berhasil dirubah!', $book);
    }
    }
    public function destroy($id)
    {$book = Book::whereId($id)->first();
         $book->delete();
        //return response
        return new BookResource(true, 'Data buku 
                    Berhasil Dihapus!', $book);
        
    }
}
