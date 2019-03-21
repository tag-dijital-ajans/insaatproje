<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoriler';
    protected $guarded = [];


    public function yazilar() {

        return $this->hasMany('App\Yazi', 'kategori_id');
    }


}
