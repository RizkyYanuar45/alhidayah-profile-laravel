<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Jurusan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'alhidayah856@gmail.com',
            'password' => bcrypt('20alhidayahyes13'),
        ]);
        Jurusan::create([
            'content'=>'masih kosong',
            'elearningDKV'=>'https://elearningsmkalhidayahdkv.edukati.com/',
            'elearningMP'=>'https://elearningsmkalhidayahmp.edukati.com/',
            'elearningTAB'=>'https://elearningsmkalhidayahtab.edukati.com/',
            'elearningTKR'=>'https://elearningsmkalhidayahtkr.edukati.com/',
        ]);
        Category::create([
            'name' => 'Informasi'
        ]);
        Category::create([
            'name' => 'Acara'
        ]);
    }
}
