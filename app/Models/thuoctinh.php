<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class thuoctinh extends Model
{
    protected $table = "thuoctinh";
    //lien ket bang sanpham
    public function sanpham(){
    	return $this->belongsTo('App\Models\sanpham','id_SP','id_ThuocTinh');
    }
}
