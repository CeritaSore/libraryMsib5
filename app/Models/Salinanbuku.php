<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Salinanbuku extends Model
{
    use HasFactory;
    protected $table = 'salinanbuku';
    protected $filltable = ['tahunterbit','buku_idbuku','penerbit_idpenerbit'];

    public $timestamps = false;

    public function meminjam(): HasMany{
        return $this->HasMany(Salinanbuku::class); 
    }

    public function penerbit(): BelongsTo{
        return $this->BelongsTo(Penerbit::class); 
    }
}
