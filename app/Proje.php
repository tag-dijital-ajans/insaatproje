<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Proje extends Model
{
    protected $table =  'projeler';
    protected $guarded = [];

    public function kategorisi() {
        return $this->belongsTo('App\Proje_Kategori','proje_kategori_id');

    }





}
