<?php

use Illuminate\Database\Seeder;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Buku::create([
            'judul' => 'Genshin Impact',
            'kategori_id' => 1,
            'rak_buku_id' => 1,
            'cover_buku' => 'default.png',
            'penulis' => 'Mihoyo',
            'penerbit' => 'Mihoyo Andorid',
            'detail' => 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum'
        ]);

        \App\Buku::create([
            'judul' => 'Buku Cinta',
            'kategori_id' => 2,
            'rak_buku_id' => 1,
            'cover_buku' => 'default.png',
            'penulis' => 'Sarah',
            'penerbit' => 'Sarah Corp.',
            'detail' => 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum'
        ]);

        \App\Buku::create([
            'judul' => 'Pedihnya Dunia',
            'kategori_id' => 3,
            'rak_buku_id' => 2,
            'cover_buku' => 'default.png',
            'penulis' => 'Linda',
            'penerbit' => 'Linda Community.',
            'detail' => 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum'
        ]);
    }
}
