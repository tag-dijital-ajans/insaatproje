<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yazi extends Model
{
    protected $table = 'yazilar';
    protected $guarded = [];

    public function kullanici(){

        return $this->belongsTo('App\User','user_id');
    }
    public function kategorisi(){
        return $this->belongsTo('App\Kategori','kategori_id');
    }



    }


