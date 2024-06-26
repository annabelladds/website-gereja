<?php

// namespace Database\Seeders\coba-laravel\database\seeders;

// use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Login;
use App\Models\Warta;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Kategori;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Login::create([
            'username' => 'annabelladds',
            'password' => bcrypt('password')
        ]);

        Login::create([
            'username' => 'im.thinkerbell',
            'password' => bcrypt('1234567890')
        ]);

        Warta::factory(7)->create();
        
        Galeri::factory(13)->create();

        // User::factory(3)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            
        User::create([
            'username' => 'annabelladds',
            'name' => 'annabella',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Sie. Sekolah Minggu',
        //     'username' => 'sekolah-minggu-pancawati',
        //     'password' => bcrypt('skm12345')
        // ]);

        // User::create([
        //     'name' => 'Sie. Remaja',
        //     'username' => 'remaja-pancawati',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Sie. Naposo',
        //     'username' => 'naposo-pancawati',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Sie. Parompuan',
        //     'username' => 'parompuan-pancawati',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Sie. Ama',
        //     'username' => 'ama-pancawati',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Sie. Zending',
        //     'username' => 'zending-pancawati',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Sie. Musik',
        //     'username' => 'musik-pancawati',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Sie. Sosial',
        //     'username' => 'sosial-pancawati',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Sie. Pendidikan',
        //     'username' => 'pendidikan-pancawati',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Sie. Kesehatan',
        //     'username' => 'kesehatan-pancawati',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Sie. Kemasyarakatan',
        //     'username' => 'kemasyarakatan-pancawati',
        //     'password' => bcrypt('12345')
        // ]);

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
        
        Berita::factory(50)->create();

        // Berita::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum blanditiis pariatur unde quasi odio sequi repellat natus, necessitatibus totam, reiciendis ipsum doloremque? Accusantium assumenda rerum obcaecati sunt ut consequuntur sed veritatis placeat aliquam magni, aperiam dolorum voluptatem accusamus odio quis perspiciatis repellat laborum animi atque ipsum cum magnam mollitia. Veritatis eum maiores cum, molestiae quos asperiores quae culpa mollitia deleniti dolorum dolorem illo nostrum nihil doloribus minima itaque omnis quisquam sed suscipit repellat. Nisi assumenda, ea aperiam odit corporis aspernatur mollitia doloremque quod, nihil temporibus exercitationem dolores.'
        //     // 'user_id' => 1
        // ]);

        // Berita::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum blanditiis pariatur unde quasi odio sequi repellat natus, necessitatibus totam, reiciendis ipsum doloremque? Accusantium assumenda rerum obcaecati sunt ut consequuntur sed veritatis placeat aliquam magni, aperiam dolorum voluptatem accusamus odio quis perspiciatis repellat laborum animi atque ipsum cum magnam mollitia. Veritatis eum maiores cum, molestiae quos asperiores quae culpa mollitia deleniti dolorum dolorem illo nostrum nihil doloribus minima itaque omnis quisquam sed suscipit repellat. Nisi assumenda, ea aperiam odit corporis aspernatur mollitia doloremque quod, nihil temporibus exercitationem dolores.'
        //     // 'user_id' => 1
        // ]);

        // Berita::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum blanditiis pariatur unde quasi odio sequi repellat natus, necessitatibus totam, reiciendis ipsum doloremque? Accusantium assumenda rerum obcaecati sunt ut consequuntur sed veritatis placeat aliquam magni, aperiam dolorum voluptatem accusamus odio quis perspiciatis repellat laborum animi atque ipsum cum magnam mollitia. Veritatis eum maiores cum, molestiae quos asperiores quae culpa mollitia deleniti dolorum dolorem illo nostrum nihil doloribus minima itaque omnis quisquam sed suscipit repellat. Nisi assumenda, ea aperiam odit corporis aspernatur mollitia doloremque quod, nihil temporibus exercitationem dolores.'
        // ]);


    }
}
