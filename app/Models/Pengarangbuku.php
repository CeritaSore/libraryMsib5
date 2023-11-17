<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengarangbuku extends Model
{
    use HasFactory;
    protected $table = 'pengarangbuku';
    protected $filltable = ['buku_idbuku','pengarang_idpengarang'];

    public $timestamps = false;

    public function pengarang(): BelongsTo{
        return $this->BelongsTo(Pengarang::class); 
    }

    public function buku(): BelongsTo{
        return $this->BelongsTo(Buku::class); 
    }

}
