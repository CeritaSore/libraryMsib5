<?php

namespace Database\Seeders;

use App\Models\Penerbit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenerbitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //BUKU 1
        Penerbit::create([
            'nama_penerbit' => 'CV ANDI OFFSET',
        ]);
        //BUKU 2
        Penerbit::create([
            'nama_penerbit' => 'Bitread Publishing',
        ]);
        //BUKU 3
        Penerbit::create([
            'nama_penerbit' => 'PT Nasya Expanding Management',
        ]);
        //BUKU 4
        Penerbit::create([
            'nama_penerbit' => 'LovRinz Publishing',
        ]);
        //BUKU 5
        Penerbit::create([
            'nama_penerbit' => 'CV Adanu Abimata',
        ]);
        //BUKU 6
        Penerbit::create([
            'nama_penerbit' => 'PT Grasindo',
        ]);
        //BUKU 7
        Penerbit::create([
            'nama_penerbit' => 'Kencan A',
        ]);
        //BUKU 8
        Penerbit::create([
            'nama_penerbit' => 'PT Gramedia Pustaka Utama',
        ]);
        //BUKU 9
        Penerbit::create([
            'nama_penerbit' => 'Yayasan Pustaka Obor Indonesia',
        ]);
        //BUKU 10
        Penerbit::create([
            'nama_penerbit' => 'DEEPUBLISH',
        ]);
        //BUKU 12
        Penerbit::create([
            'nama_penerbit' => 'Penerbit Kaifa',
        ]);
        //BUKU 13
        Penerbit::create([
            'nama_penerbit' => 'PT Bumi Aksara',
        ]);
        //BUKU 14
        Penerbit::create([
            'nama_penerbit' => 'Bhuana Ilmu Populer',
        ]);
        //BUKU 15
        Penerbit::create([
            'nama_penerbit' => 'PT Bentara Aksara Cahaya',
        ]);
    }
}
