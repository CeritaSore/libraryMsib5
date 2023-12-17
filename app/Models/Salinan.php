<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salinan extends Model
{
    use HasFactory;
    protected $table = 'salinanbuku';
    protected $fillable = ['idsalinanbuku','tahunterbit',
                        'buku_idbuku','penerbit_idpenerbit'];
}