<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'role' => 'admin',
            'name' => 'Mylian',
            'email' => 'mylian214@gmail.com',
            'password' => Hash::make('mylian214'),
            'remember_token' => Str::random(60)
        ]);

        \App\User::create([
            'role' => 'user',
            'name' => 'Myl',
            'email' => 'myl@gmail.com',
            'password' => Hash::make('mylian214'),
            'remember_token' => Str::random(60)
        ]);

        \App\Kategori::create([
            'kategori' => 'Fantasy'
        ]);

        \App\RakBuku::create([
            'rak_buku' => 'A001'
        ]);

        \App\Buku::create([
            'judul' => 'Genshin Impact',
            'kategori_id' => 1,
            'rak_buku_id' => 1,
            'cover_buku' => 'default.png',
            'penulis' => 'Mihoyo',
            'Penerbit' => 'Mihoyo Andorid'
        ]);
    }
}
