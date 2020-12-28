<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $guarded = ['id'];

    public function getCover(){
        if(!$this->cover_buku){
            return asset('img/cover/default.png');
        }

        return asset('img/cover/'.$this->cover_buku);
    }
 
    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function rakBuku(){
        return $this->belongsTo(RakBuku::class);
    }

    public function ulasan(){
        return $this->hasMany(Ulasan::class);
    }

    public function favorit(){
        return $this->hasMany(FavoritBuku::class);
    }
}
