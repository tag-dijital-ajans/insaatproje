<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Proje;

class Proje_Kategori extends Model
{
    protected $table =  'proje_kategori';
    protected $guarded = [];

    public function projeler(){
        return $this->hasMany('App\Proje','proje_kategori_id');


    }
}
