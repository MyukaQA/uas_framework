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

        \App\Kategori::create([
            'kategori' => 'Romance'
        ]);

        \App\Kategori::create([
            'kategori' => 'Comedy'
        ]);

        \App\RakBuku::create([
            'rak_buku' => 'A001'
        ]);

        \App\RakBuku::create([
            'rak_buku' => 'A002'
        ]);

        \App\RakBuku::create([
            'rak_buku' => 'A003'
        ]);

        \App\RakBuku::create([
            'rak_buku' => 'A004'
        ]);

        \App\RakBuku::create([
            'rak_buku' => 'A005'
        ]);

        \App\Buku::create([
            'judul' => 'Genshin Impact',
            'kategori_id' => 1,
            'rak_buku_id' => 1,
            'cover_buku' => 'default.png',
            'penulis' => 'Mihoyo',
            'Penerbit' => 'Mihoyo Andorid',
            'detail' => 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum'
        ]);

        \App\Buku::create([
            'judul' => 'Buku Cinta',
            'kategori_id' => 2,
            'rak_buku_id' => 1,
            'cover_buku' => 'default.png',
            'penulis' => 'Sarah',
            'Penerbit' => 'Sarah Corp.',
            'detail' => 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum'
        ]);

        \App\Buku::create([
            'judul' => 'Pedihnya Dunia',
            'kategori_id' => 3,
            'rak_buku_id' => 2,
            'cover_buku' => 'default.png',
            'penulis' => 'Linda',
            'Penerbit' => 'Linda Community.',
            'detail' => 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum'
        ]);
    }
}
