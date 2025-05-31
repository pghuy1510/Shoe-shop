<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chitietdonhang extends Model
{
    protected $table = "chitietdonhang";
    //lien ket bang sanpham
    public function sanpham(){
    	return $this->belongsTo('App\Models\sanpham','id_SP','id_CTDH');
    }
    //lien ket bang dondathang
    public function dondathang(){
    	return $this->belongsTo('App\Models\dondathang','id_Bill','id_CTDH');
    }
}
