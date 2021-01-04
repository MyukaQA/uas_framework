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

        \App\Buku::create([
            'judul' => 'Harry Potter and the Philosophers Stone',
            'kategori_id' => 1,
            'rak_buku_id' => 4,
            'cover_buku' => 'harry-1.jpg',
            'penulis' => 'J.K. Rowling',
            'Penerbit' => 'Gramedia Pustaka Utama',
            'detail' => 'Sebelum novel dimulai, Voldemort, penyihir paling jahat, membunuh orang tua Harry tetapi secara misterius menghilang setelah mencoba membunuh Harry. Saat dunia sihir merayakan kejatuhan Voldemort, Professor Dumbledore, Professor McGonagall dan Rubeus Hagrid menempatkan anak yatim piatu berumur satu tahun ini dalam perawatan bibi dan paman Muggle (bukan penyihir)–nya, Vernon dan Petunia Dursley.'
        ]);

        \App\Buku::create([
            'judul' => 'Harry Potter and the Chamber of Secrets',
            'kategori_id' => 1,
            'rak_buku_id' => 4,
            'cover_buku' => 'harry-2.jpg',
            'penulis' => 'J.K. Rowling',
            'Penerbit' => 'Gramedia Pustaka Utama',
            'detail' => 'Harry Potter disuruh mempersiapkan rumah untuk kunjungan dari klien potensial Vernon Dursley. Namun, setelah selesai, paman Dursley menyuruh Harry ke kamarnya. Di kamar, Harry bertemu Dobby si peri rumah, ia memperingatkan Harry untuk tidak kembali ke Hogwarts. Ketika Harry menolak, Dobby menyebabkan kekacauan di rumah dan membuat Harry merusak pertemuan Vernon. Vernon mengunci Harry di kamarnya untuk mencegah kembali ke Hogwarts. Tetapi, Ron, Fred, dan George Weasley tiba dengan mobil terbang mereka untuk menyelamatkan Harry dari cengkeraman Paman Vernon, yang sedang berusaha untuk menarik Harry kembali ke kamarnya. Harry kemudian dibawa ke The Burrow, rumah keluarga Weasley.'
        ]);

        \App\Buku::create([
            'judul' => 'Harry Potter and the Prisoner of Azkaban',
            'kategori_id' => 1,
            'rak_buku_id' => 4,
            'cover_buku' => 'harry-3.jpg',
            'penulis' => 'J.K. Rowling',
            'Penerbit' => 'Gramedia Pustaka Utama',
            'detail' => 'Harry Potter menghabiskan musim panas bersama-sama pasangan Dursley sebelum memulakan tahun ketiga di Hogwarts. Kerana terlalu marah, dia mengembangkan Bibi Marge dan meninggalkan rumah, lalu bertembung dengan Menteri Sihir. Dia dilepaskan pergi tanpa apa-apa hukuman, sebab utamanya (yang Harry dapat tahu kemudian) adalah seorang pembunuh bersiri, Sirius Black berhasil melarikan diri dari penjara sihir, Azkaban untuk membunuh Harry. Black ialah pembantu Voldemort dan telah ditahan di dalam penjara selama 12 tahun.'
        ]);

        \App\Buku::create([
            'judul' => 'Harry Potter and the Goblet of Fire',
            'kategori_id' => 1,
            'rak_buku_id' => 4,
            'cover_buku' => 'harry-4.jpg',
            'penulis' => 'J.K. Rowling',
            'Penerbit' => 'Gramedia Pustaka Utama',
            'detail' => 'Dalam novel ini diceritakan bahwa Hogwarts menjadi tuan rumah Turnamen Triwizard, yaitu tunamen yang diadakan untuk mempererat persaudaraan antara sekolah sihir. Turnamen ini diikuti oleh 3 sekolah, yaitu Sekolah Sihir Hogwarts yang dipimpin oleh Albus Dumbledore, Akademi Sihir Beauxbatons yang dipimpin oleh Madame Maxime dan Institut Durmstrang yang dipimpin oleh Igor karkaroff. Murid yang berumur tujuh belas tahun ke atas dibolehkan memasukkan nama mereka ke dalam Piala Api, dan akan terpilih satu juara dari tiap sekolah yang mewakili sekolah masing-masing. Piala Api telah mengeluarkan kertas yang berisi nama 3 juara dari 3 sekolah, yaitu Fleur Delacour dari Beauxbatons, Viktor Krum dari Durmstrang, dan Cedric Diggory dari Hogwarts. Namun ternyata belum selesai, Piala Api mengeluarkan satu nama lagi: Harry Potter.'
        ]);

        \App\Buku::create([
            'judul' => 'Harry Potter and the Order of the Phoenix',
            'kategori_id' => 1,
            'rak_buku_id' => 4,
            'cover_buku' => 'harry-5.jpg',
            'penulis' => 'J.K. Rowling',
            'Penerbit' => 'Gramedia Pustaka Utama',
            'detail' => 'Tidak banyak penyihir yang percaya (atau mau percaya) bahwa Voldermort telah kembali, termasuk otoritas tertinggi, Kementerian Sihir,Harry dan Dumbledore dianggap menyebar kabar bohong dan dianggap terganggu jiwanya. Meskipun demikian, masih banyak orang yang percaya pada kebenaran (Dumbledore), dan mereka inilah yang tergabung dalam Orde Phoenix. Namun karena situasi belum memungkinkan, mereka bergerak dan berkumpul secara diam-diam untuk menghindari kecurigaan dari Kementerian. Mereka menggunakan kediaman Sirius, Grimmauld Place nomor 12 sebagai Markas Besar, sehingga Sirius tidak lagi dalam pelarian (tapi tetap bersembunyi karena pihak kementerian masih mencarinya).'
        ]);

        \App\Buku::create([
            'judul' => 'Harry Potter and the Half-Blood Prince',
            'kategori_id' => 1,
            'rak_buku_id' => 4,
            'cover_buku' => 'harry-6.jpg',
            'penulis' => 'J.K. Rowling',
            'Penerbit' => 'Gramedia Pustaka Utama',
            'detail' => 'Voldemort dan para "Pelahap Maut"-nya secara terang-terangan melakukan kekacauan besar di seluruh negara Britania Raya|Inggris, baik untuk kaum penyihir maupun para Muggle. bahkan seluruh langit inggris selama beberapa waktu terus "mendung" (menurut muggle) yang kenyataannya merupakan dampak dari peredaran bebas dementor diseluruh negeri.'
        ]);
    }
}
