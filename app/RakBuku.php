<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RakBuku extends Model
{
    protected $table = 'rak_buku';
    protected $guarded = ['id'];

    public function buku(){
        return $this->hasMany(Buku::class);
    }
}
