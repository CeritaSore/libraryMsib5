<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $primaryKey = 'idbuku';
    protected $table = 'buku';
    protected $fillable = ['judulbuku','kategori_idkategori'];
}
