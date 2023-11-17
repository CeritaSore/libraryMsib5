<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $filltable = ['listkategori'];

    public $timestamps = false;

    public function buku(): HasMany{
        return $this->hasMany(Buku::class); 
    }
}
