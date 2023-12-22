<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $primaryKey = 'idbuku';
    protected $table = 'buku';
    protected $fillable = ['judulbuku','pengarang_idpengarang',
    'penerbit_idpenerbit','kategori_idkategori','foto','deskripsi','stok','status'];
    public function kategori() {
        return $this->belongsTo(kategori::class,'kategori_idkategori','idkategori');
    }
    public function pengarang() {
        return $this->belongsTo(pengarang::class,'pengarang_idpengarang','idpengarang');
    }
    public function penerbit() {
        return $this->belongsTo(penerbit::class,'penerbit_idpenerbit','idpenerbit');
    }
    
    
}
