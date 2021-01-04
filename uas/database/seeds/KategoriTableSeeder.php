<?php

use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Kategori::create([
            'kategori' => 'Fantasy'
        ]);

        \App\Kategori::create([
            'kategori' => 'Romance'
        ]);

        \App\Kategori::create([
            'kategori' => 'Comedy'
        ]);
    }
}
