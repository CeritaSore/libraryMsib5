<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $filltable = ['judulbuku','kategori_idkategori'];

    public $timestamps = false;

    public function pengarangbuku(): HasMany{
        return $this->hasMany(Pengarangbuku::class); 
    }

    public function salinanbuku(): HasMany{
        return $this->hasMany(Salinanbuku::class); 
    }

    public function kategori(): BelongsTo{
        return $this->belongsTo(Kategori::class); 
    }
}
