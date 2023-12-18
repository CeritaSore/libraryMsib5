<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Peminjaman extends Model
{
 
    protected $table = 'peminjaman';
    protected $fillable = [
        'buku_id',
        'user_id',
        'tanggal_peminjaman',
        'tanggal_pengambilan',
        'tanggal_pengembalian',
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


