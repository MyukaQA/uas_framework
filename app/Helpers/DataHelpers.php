<?php

namespace App\Helpers;

use App\Kategori;
use App\RakBuku;

class DataHelpers{
    // Bikin wadah untuk menampung objek.
    private static $instance = null;
  
    public function __construct(){}

    public static function getInstance(){
      if (self::$instance == null) {
          self::$instance = new DataHelpers();
      }else{
        echo 'Object sudah dibuat ';
      }

      // Kembalikan.
      return self::$instance;
    }

    // Method seperti biasanya.
    public function kategoriObject(){
      return Kategori::all();
    }

    public function rakBukuObject(){
      return RakBuku::all();
    }
}