<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Team::create([
            'nama'=> 'Ahmad Fadhliansyah',
            'asal' => 'STT Terpadu NurulFikri',
            'role'=>'Project Manager, User Authorizer',
        ]);
        Team::create([
            'nama'=> 'Fajar septianto',
            'asal' => 'STT Terpadu NurulFikri',
            'role'=>'Database Designer, Frontend and Backend Editor',
        ]);
        Team::create([
            'nama'=> 'Ridwan Khomarudin Muharram',
            'asal' => 'STT Terpadu NurulFikri',
            'role'=>'Backend Editor',
        ]);
        Team::create([
            'nama'=> 'Kurniawan',
            'asal' => 'STT Terpadu NurulFikri',
            'role'=>'Dokumentasi',
        ]);
        Team::create([
            'nama'=> 'Lora Lorensa Manafe',
            'asal' => 'PoliTeknik Negeri Kupang',
            'role'=>'Dokumentasi',
        ]);

    }
}
