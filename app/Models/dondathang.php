<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dondathang extends Model
{
    protected $table = "dondathang";
    //lien ket bang khachhang
    public function khachhang(){
    	return $this->belongsTo('App\Models\khachhang','id_KH','id_Bill');
    }
    //lien ket bang chitietdonhang
    public function chitietdonhang(){
    	return $this->hasMany('App\Models\chitietdonhang','id_Bill','id_Bill');
    }
}
