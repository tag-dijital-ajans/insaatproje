<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menuler';
    protected $guarded = [];


    public function sayfasi(){
        return $this->belongsTo('App\Sayfa','sayfa_id');
    }

    public function ustmenusu() {

        return $this->belongsTo('App\Menu','id');
    }
    public function altmenusu() {

        return $this->hasMany('App\Menu','menu_ust_id');
    }

}
