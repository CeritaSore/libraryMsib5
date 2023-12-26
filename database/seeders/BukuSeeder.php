<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //buku 1
        Buku::create([
            'judul_buku' => 'analisis dan perangcangan sistem informasi menggunakan model terstruktur dan uml',
            'pengarang_id' => '1',
            'penerbit_id' => '1',
            'kategori_id' => '1',
            'tahun_terbit' => '2016',

        ]);
        //buku 2
        Buku::create([
            'judul_buku' => 'Menulis Buku digital modern',
            'pengarang_id' => '2',
            'penerbit_id' => '2',
            'kategori_id' => '1',
            'tahun_terbit' => '2021',

        ]);
        //buku 3
        Buku::create([
            'judul_buku' => 'Bahasa ibu:Ilmu sosial budaya dasar',
            'pengarang_id' => '3',
            'penerbit_id' => '3',
            'kategori_id' => '1',
            'tahun_terbit' => '2023',

        ]);
        //buku 4
        Buku::create([
            'judul_buku' => 'Bahasa Indonesia',
            'pengarang_id' => '4',
            'penerbit_id' => '4',
            'kategori_id' => '1',
            'tahun_terbit' => '2019',

        ]);
        //buku 5
        Buku::create([
            'judul_buku' => 'Bermula dari ide, berakhir pada tulisan',
            'pengarang_id' => '5',
            'penerbit_id' => '5',
            'kategori_id' => '1',
            'tahun_terbit' => '2023',

        ]);
        //buku 6
        Buku::create([
            'judul_buku' => 'Tematik 3:Benda Di Sekitarku',
            'pengarang_id' => '6',
            'penerbit_id' => '6',
            'kategori_id' => '1',
            'tahun_terbit' => '2016',

        ]);
        //buku 7
        Buku::create([
            'judul_buku' => 'Teori komunikasi interpersonal',
            'pengarang_id' => '7',
            'penerbit_id' => '7',
            'kategori_id' => '1',
            'tahun_terbit' => '2020',

        ]);
        //buku 8
        Buku::create([
            'judul_buku' => 'Negeri 5 menara',
            'pengarang_id' => '8',
            'penerbit_id' => '8',
            'kategori_id' => '1',
            'tahun_terbit' => '2009',

        ]);
        //buku 9
        Buku::create([
            'judul_buku' => 'Psikologi sastra',
            'pengarang_id' => '9',
            'penerbit_id' => '9',
            'kategori_id' => '4',
            'tahun_terbit' => '2010',

        ]);
        //buku 10
        Buku::create([
            'judul_buku' => 'model penelitian kuantitatif berbasi sem-amos',
            'pengarang_id' => '10',
            'penerbit_id' => '10',
            'kategori_id' => '1',
            'tahun_terbit' => '2015',

        ]);
        //buku 11
        Buku::create([
            'judul_buku' => 'Model-moel pembelajaran',
            'pengarang_id' => '11',
            'penerbit_id' => '10',
            'kategori_id' => '1',
            'tahun_terbit' => '2020',

        ]);
        //buku 12
        Buku::create([
            'judul_buku' => 'Quantum learning, membiasakan belajar nyaman dan menyenangkan',
            'pengarang_id' => '12',
            'penerbit_id' => '11',
            'kategori_id' => '1',
            'tahun_terbit' => '1992',

        ]);
        //buku 13
        Buku::create([
            'judul_buku' => 'Model-model pembelajaran matematika',
            'pengarang_id' => '13',
            'penerbit_id' => '12',
            'kategori_id' => '1',
            'tahun_terbit' => '2018',

        ]);
        // buku 14
        Buku::create([
            'judul_buku' => 'the Psycology of Money',
            'pengarang_id' => '16',
            'penerbit_id' => '14',
            'kategori_id' => '2',
            'tahun_terbit' => '2020',

        ]);

        // buku 15
        Buku::create([
            'judul_buku' => 'Bicara itu ada seninya',
            'pengarang_id' => '14',
            'penerbit_id' => '14',
            'kategori_id' => '2',
            'tahun_terbit' => '2018',

        ]);
        // buku 16
        Buku::create([
            'judul_buku' => 'thinking fast and slow',
            'pengarang_id' => '15',
            'penerbit_id' => '8',
            'kategori_id' => '2',
            'tahun_terbit' => '2011',

        ]);
    }
}
