<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pengarang extends Model
{
    use HasFactory;
    protected $table = 'pengarang';
    protected $filltable = ['namapengarang'];

    public $timestamps = false;

    public function pengarangbuku(): HasMany{
        return $this->HasMany(Pengarangbuku::class); 
    }
}
