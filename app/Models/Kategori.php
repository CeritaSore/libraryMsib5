<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
    protected $primaryKey = 'idkategori';
    protected $fillable = ['kategori'];
    public function buku() {
        return $this->hasMany(Buku::class,'kategori_id','idkategori');
    }
}
