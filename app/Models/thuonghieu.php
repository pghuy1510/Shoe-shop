<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class thuonghieu extends Model
{
    protected $table = "thuonghieu";
    public $timestamps = false;
    //lien ket bang chude
    public function chude(){
    	return $this->hasMany('App\Models\chude','id_TH','id_TH');
    }
    //lien ket bang sanpham
    public function sanpham(){
    	return $this->hasMany('App\Models\sanpham','id_TH','id_TH');
    }
}
