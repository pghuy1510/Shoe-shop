<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = "comment";
    //lien ket bang sanpham
    public function sanpham(){
    	return $this->belongsTo('App\Models\sanpham','id_SP','id_Cmt');
    }
    //lien ket bang khachhang
    public function khachhang(){
    	return $this->belongsTo('App\Models\khachhang','id_KH','id_Cmt');
    }
}
