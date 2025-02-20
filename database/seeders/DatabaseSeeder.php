<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Jurusan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        User::create([
            'name' => 'Admin',
            'email' => 'alhidayah856@gmail.com',
            'password' => Hash::make('20alhidayahyes13'), 
        ]);

        
        $jurusanData = [
            [
                'name' => 'Desain Komunikasi Visual (DKV)',
                'elearning' => 'https://elearningsmkalhidayahdkv.edukati.com/',
                'description' => 'description',
                'image' => 'assets/images/photos/DKV.jpeg', 
            ],
            [
                'name' => 'Teknik Alat Berat (TAB)',
                'elearning' => 'https://elearningsmkalhidayahtab.edukati.com/',
                'description' => 'description',
                'image' => 'assets/images/photos/TAB.jpeg',
            ],
            [
                'name' => 'Manajemen Perkantoran (MP)',
                'elearning' => 'https://elearningsmkalhidayahmp.edukati.com/',
                'description' => 'description',
                'image' => 'assets/images/photos/MP.jpeg',
            ],
            [
                'name' => 'Teknik Kendaraan Ringan (TKR)',
                'elearning' => 'https://elearningsmkalhidayahdkv.edukati.com/',
                'description' => 'description',
                'image' => 'assets/images/photos/TKR.jpeg',
            ],
        ];

        foreach ($jurusanData as $data) {
            Jurusan::create($data);
        }

        Category::create(['name' => 'Informasi']);
        Category::create(['name' => 'Acara']);
    }
}
