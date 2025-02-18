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
            'name'=>'Desain Komunikasi Visual (DKV)',
            'elearning'=>'https://elearningsmkalhidayahdkv.edukati.com/',
            'description'=>'description',
            'image'=>'image',
        ]);
        Jurusan::create([
            'name'=>'Teknik Alat Berat (TAB)',
            'elearning'=>'https://elearningsmkalhidayahtab.edukati.com/',
            'description'=>'description',
            'image'=>'image',
        ]);
        Jurusan::create([
            'name'=>'Manajemen Perkantoran (MP)',
            'elearning'=>'https://elearningsmkalhidayahmp.edukati.com/',
            'description'=>'description',
            'image'=>'image',
        ]);
        Jurusan::create([
            'name'=>'Teknik Kendaraan Ringan (TKR)',
            'elearning'=>'https://elearningsmkalhidayahdkv.edukati.com/',
            'description'=>'description',
            'image'=>'image',
        ]);
        Category::create([
            'name' => 'Informasi'
        ]);
        Category::create([
            'name' => 'Acara'
        ]);
    }
}
