<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    protected $table = "khachhang";
    //lien ket bang comment
    public function comment(){
    	return $this->hasMany('App\Models\comment','id_KH','id_KH');
    }
    //lien ket bang dondathang
    public function dondathang(){
    	return $this->hasMany('App\Models\dondathang','id_KH','id_KH');
    }
}
