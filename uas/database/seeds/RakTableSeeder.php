<?php

use Illuminate\Database\Seeder;

class RakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

        \App\RakBuku::create([
            'rak_buku' => 'A006'
        ]);

        \App\RakBuku::create([
            'rak_buku' => 'A007'
        ]);

        \App\RakBuku::create([
            'rak_buku' => 'A008'
        ]);

        \App\RakBuku::create([
            'rak_buku' => 'A009'
        ]);

        \App\RakBuku::create([
            'rak_buku' => 'A010'
        ]);
    }
}
