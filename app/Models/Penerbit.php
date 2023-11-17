<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penerbit extends Model
{
    use HasFactory;
    protected $table = 'penerbit';
    protected $filltable = ['namapenerbit'];

    public $timestamps = false;

    public function salinan(): HasMany{
        return $this->hasMany(Salinanbuku::class); 
    }
}
