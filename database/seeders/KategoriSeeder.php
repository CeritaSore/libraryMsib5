<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //buku 1
        Kategori::create([
            'kategori'=>'Non-fiksi',
        ]);
        //buku 7
        Kategori::create([
            'kategori'=>'Self Improvement',
        ]);
        //buku 8
        Kategori::create([
            'kategori'=>'Fiksi',
        ]);
        //buku 9
        Kategori::create([
            'kategori'=>'psikologi',
        ]);
       
    }
}
