<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class giohang extends Model
{
    protected $table = "giohang";

    //lien ket bang sanpham
    public function sanpham(){
    	return $this->hasMany('App\Models\sanpham','id_SP','id_SP');
    }
    //lien ket bang khachhang
    public function khachhang(){
    	return $this->belongsTo('App\Models\khachhang','id_KH','id_KH');
    }
}
