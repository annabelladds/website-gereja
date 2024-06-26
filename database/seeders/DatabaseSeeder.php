<?php

use App\Models\User;
use App\Models\Warta;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        // Warta::factory(7)->create();
        
        // Galeri::factory(10)->create();
            
        User::create([
            'username' => 'annabelladds',
            'name' => 'annabella',
            'password' => bcrypt('password')
        ]);

        Kategori::create([
            'name' => 'Sie. Sekolah Minggu',
            'slug' => 'sekolah-minggu-pancawati',
        ]);

        Kategori::create([
            'name' => 'Sie. Remaja',
            'slug' => 'remaja-pancawati',
        ]);

        Kategori::create([
            'name' => 'Sie. Naposo',
            'slug' => 'naposo-pancawati',
        ]);

        Kategori::create([
            'name' => 'Sie. Parompuan',
            'slug' => 'parompuan-pancawati',
        ]);

        Kategori::create([
            'name' => 'Sie. Ama',
            'slug' => 'ama-pancawati',
        ]);

        Kategori::create([
            'name' => 'Sie. Zending',
            'slug' => 'zending-pancawati',
        ]);

        Kategori::create([
            'name' => 'Sie. Musik',
            'slug' => 'musik-pancawati',
        ]);

        Kategori::create([
            'name' => 'Sie. Sosial',
            'slug' => 'sosial-pancawati',
        ]);

        Kategori::create([
            'name' => 'Sie. Pendidikan',
            'slug' => 'pendidikan-pancawati',
        ]);

        Kategori::create([
            'name' => 'Sie. Kesehatan',
            'slug' => 'kesehatan-pancawati',
        ]);

        Kategori::create([
            'name' => 'Sie. Kemasyarakatan',
            'slug' => 'kemasyarakatan-pancawati',
        ]);
        
        // Berita::factory(50)->create();

    }
}
