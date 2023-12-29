<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjamen';
    protected $fillable = ['buku_id', 'tgl_pinjam', 'tgl_ambil', 'lama_peminjaman'];
    protected $primaryKey = 'idpeminjaman';
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'buku_id', 'idbuku');
    }

    public function getTglPinjamAttribute($value)
    {
        return Carbon::parse($value);
    }

    public function getTglKembaliHarapAttribute($value)
    {
        return Carbon::parse($value);
    }

}
