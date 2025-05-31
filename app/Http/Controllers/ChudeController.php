<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chude;
use App\Models\thuonghieu;
use App\Models\sanpham;

class ChudeController extends Controller
{
    //danh sach chu de
    public function getDanhsach(){
        $thuonghieu = thuonghieu::with('chude')->get();
        $chude = chude::all();
        
        return view('admin.chude.danhsach',['chude'=>$chude,'thuonghieu'=>$thuonghieu]);
    }
    

    //thêm chu de
    public function getThem(){
    	$thuonghieu = thuonghieu::all();
    	return view('admin.chude.them',['thuonghieu'=>$thuonghieu]);
    }
    public function postThem(Request $request){

    	$this->validate($request,[
    		['TenCD'=>'required|min:3|max:100'],
    		[
    			'TenCD.required'=>'Bạn Chưa Nhập Tên Chủ Đề ',
    			'TenCD.unique'=>'Tên Thương Hiệu Đã Tồn Tại',
    			'TenCD.min'=> 'Tên thương hiệu phải dài từ 3 - 100 kí tự',
    			'TenCD.max'=> 'Tên thương hiệu phải dài từ 3 - 100 kí tự',
    		]
    	]);
        
    	$chude = new chude;
    	$TenCD = $request->TenCD;
    	$idth = $request->idthuonghieu;

        $chude->TenCD = $TenCD;
        $chude->id_TH = $idth;
    	$chude->save();
    	
    	return redirect('admin/chude/themchude')->with('thongbao','Thêm Thành Công');

    }

    //xoa chu de
    public function getXoa($id_CD){
        sanpham::where('id_CD',$id_CD)->delete();
        chude::where('id_CD',$id_CD)->delete();
        return redirect('admin/chude/danhsachchude')->with('thongbao','Bạn Đã Xóa Thành Công');  
    }

    //edit chu  de
    public function getSua($id_CD){
        $chude = chude::where('id_CD',$id_CD)->first();
        $thuonghieu = thuonghieu::all();
        return view('admin.chude.sua', ['chude'=>$chude,'thuonghieu'=>$thuonghieu]);
    }
    public function postSua(Request $request){
        
        $id_CD = $request->id_cd;
        $id_TH = $request->id_TH;
        $idthuonghieu = $request->idthuonghieu;
        $TenCD = $request->TenCD;
           
        $chude = chude::where('id_CD',$id_CD)->update(['id_TH'=>$idthuonghieu,'TenCD'=>$TenCD]);
        return redirect()->route('DSchude');       
        
    }
}
