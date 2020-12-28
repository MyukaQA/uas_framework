<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoritBuku extends Model
{
    protected $table = 'favorit_buku';
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function buku(){
        return $this->belongsTo(Buku::class);
    }
}
