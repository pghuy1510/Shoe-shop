<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chude extends Model
{
    protected $table = "chude";
    public $timestamps = false;
    //lien kết bang thuonghieu
    public function thuonghieu(){
    	return $this->belongsTo('App\Models\thuonghieu','id_TH','id_CD');
    }
    //lien ket bang sanpham
    public function sanpham(){
    	return $this->hasMany('App\Models\sanpham','id_CD','id_CD');
    }
}
