<?php

namespace Database\Seeders;

use App\Models\Pengarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // buku 1
        Pengarang::create([
            'nama_pengarang' => 'Muhamad Muslihudin dan Oktafiano'
        ]);
        // buku 2
        Pengarang::create([
            'nama_pengarang' => 'Miftahul Huda'
        ]);
        // buku 3
        Pengarang::create([
            'nama_pengarang' => 'Florentianus Dopo, SS., M.Pd.; Dr. Yohanes Vianey Sayangan, M.Si.; Ermelinda Yosefa Awe, S.Sos., M.Pd.',
        ]);
        // buku 4
        Pengarang::create([
            'nama_pengarang' => 'Eti Wati, S.Kep., Ners., S.Pd, M.Pd'
        ]);
        // buku 5
        Pengarang::create([
            'nama_pengarang' => 'Elah Nurelah Supriyadi'
        ]);
        // buku 6
        Pengarang::create([
            'nama_pengarang' => 'Zulkarnaini Diran'
        ]);
        // buku 7
        Pengarang::create([
            'nama_pengarang' => 'Dr. Ali Nurdin, S.Ag., M.Si.'
        ]);
        // buku 8
        Pengarang::create([
            'nama_pengarang' => 'A. Fuadi'
        ]);
        // buku 9
        Pengarang::create([
            'nama_pengarang' => 'Prof. Dr. Albertine Minderop, MA'
        ]);
        // buku 10
        Pengarang::create([
            'nama_pengarang' => 'Dr. Ir. H. Syamsul Bahri, M.M. & Dr. H. Fahkry Zamzam, M.M., M.H.'
        ]);
        // buku 11
        Pengarang::create([
            'nama_pengarang' => 'Shilphy A. Octavia'
        ]);
        // buku 12
        Pengarang::create([
            'nama_pengarang' => 'Bobbi DePorter bersama Mike Hernacki'
        ]);
        // buku 13
        Pengarang::create([
            'nama_pengarang' => 'Isrokatun & Amelia Rosmala'
        ]);
        // buku 14
        Pengarang::create([
            'nama_pengarang' => 'Oh Su Hyang',
        ]);
        // buku 15
        Pengarang::create([
            'nama_pengarang' => 'Daniel Kahneman',
        ]);
        Pengarang::create([
            'nama_pengarang' => 'The Psycology of Money',
        ]);
    }
}
