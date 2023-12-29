<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Team::create([
            'nama' => 'Ahmad Fadhliansyah', 
            'asal' => 'STT Terpadu Nurul Fikri', 
            'roles'=>'Lead Team, PM, Frontend',
            'foto'=>'https://i.ibb.co/6mmzhjv/Ahmad-Fadhliansyah2.jpg'
        ]);
        Team::create([
            'nama' => 'Fajar septianto', 
            'asal' => 'STT Terpadu Nurul Fikri', 
            'roles'=>'Database Designer, Backend, QA',
            'foto'=>'https://i.ibb.co/BfbGMjQ/1697524985285-removebg-preview.png'
        ]);
        Team::create([
            'nama' => 'Ridwan Komarudin', 
            'asal' => 'STT Terpadu Nurul Fikri', 
            'roles'=>'Backend',
            'foto'=>'https://i.ibb.co/swD99X4/ridwan2.jpg" alt="ridwan2'
        ]);
        Team::create([
            'nama' => 'Kurniawan', 
            'asal' => 'STT Terpadu Nurul Fikri', 
            'roles'=>'Dokumentasi',
            'foto'=>'https://i.ibb.co/pz5yR6C/Kurniawan2.jpg'
        ]);
        Team::create([
            'nama' => 'Lora Manafe', 
            'asal' => 'Politeknik Negeri Kupang', 
            'roles'=>'Dokumentasi',
            'foto'=>'https://i.ibb.co/WF82tvR/lora2.jpg" alt="lora2'
        ]);
    }
}
