<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Meminjam extends Model
{
    use HasFactory;
    protected $table = 'meminjam';
    protected $filltable = ['tanggal_pengambilan','tanggal_pengembalian'];

    public $timestamps = false;

    public function salinanbuku(): BelongsTo{
        return $this->BelongsTo(Salinanbuku::class); 
    }
}

