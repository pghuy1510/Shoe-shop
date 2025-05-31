<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\thuonghieu;
use App\Models\sanpham;
use App\Models\chude;

class ThuongHieuController extends Controller
{
    //lấy danh sách thương hiệu
    public function getDanhsach(){
    	$thuonghieu = thuonghieu::paginate(8);
    	return view('admin.thuonghieu.danhsach', ['thuonghieu'=>$thuonghieu]);
    }

    //edit thuong hieu
    public function getSua($id_TH){
    	$thuonghieu = thuonghieu::where('id_TH',$id_TH)->first();
    	return view('admin.thuonghieu.sua', ['thuonghieu'=>$thuonghieu]);
    }
    public function postSua(Request $request){
        $this->validate($request,[
            [
                'TenTH'=>'required|unique:thuonghieu,TenTH|min:3|max:100'
            ],
            [
                'TenTH.required'=>'Bạn Chưa Nhập Tên Thương Hiệu ',
                'TenTH.min'=> 'Tên thương hiệu phải dài từ 3 - 100 kí tự',
                'TenTH.max'=> 'Tên thương hiệu phải dài từ 3 - 100 kí tự',
            ]
        ]);
        $id_TH = $request->id_TH;
        $mota = $request->mota;
        $TenTH = $request->TenTH;
         if($request->hasFile('myFile'))         
         {             //lưu file  
            $img = $request->file('myFile')->getClientOriginalName();
                    $request->file('myFile')->move(  
                                         'images',    //nơi cần lưu                       
                                         $img     //tên file                      
                                           );
        } 
        else  {
              $img=$request->img;
          }  
    	$thuonghieu = thuonghieu::where('id_TH',$id_TH)->update(['TenTH'=>$TenTH,'Description'=>$mota,'ImgTH'=>$img]);
    	
    	

    	return redirect('admin/thuonghieu/suathuonghieu/'.$id_TH)->with('thongbao','Sửa Thành Công');
        
        
    }

    //thêm thương hiệu
    public function getThem(){
    	return view('admin.thuonghieu.them');
    }
    public function postThem(Request $request){
    	$this->validate($request,[
    		['TenTH'=>'required|min:3|max:100'],
    		[
    			'TenTH.required'=>'Bạn Chưa Nhập Tên Thương Hiệu ',
    			'TenTH.unique'=>'Tên Thương Hiệu Đã Tồn Tại',
    			'TenTH.min'=> 'Tên thương hiệu phải dài từ 3 - 100 kí tự',
    			'TenTH.max'=> 'Tên thương hiệu phải dài từ 3 - 100 kí tự',
    		]
    	]);
        if($request->hasFile('myFile'))         
         {             //lưu file  
            $img = $request->file('myFile')->getClientOriginalName();
                    $request->file('myFile')->move(  
                                         'images',    //nơi cần lưu                       
                                         $img     //tên file                      
                                           );
        } 
        else  {
              $img= '';
        }
    	$TenTH = $request->TenTH;
        $mota = $request->Mota;
    	$thuonghieu = new thuonghieu;
        $thuonghieu->TenTH = $TenTH;
        $thuonghieu->Description = $mota;
        $thuonghieu->ImgTH = $img;
    	$thuonghieu->save();

    	return redirect('admin/thuonghieu/themthuonghieu')->with('thongbao','Thêm Thành Công');

    }

    //xem chi tiết thương hiệu
    public function getXem($id_TH){
    	$thuonghieu = thuonghieu::where('id_TH',$id_TH)->first();
    	return view('admin.thuonghieu.xem',['thuonghieu'=>$thuonghieu]);
    }

    //tìm kiếm thương hiệu
    public function getTimkiem(Request $request,$id_TH){
        $tukhoa = $request->tukhoa;
        $thuonghieu = thuonghieu::where([
        	['TenTH','like',"%$tukhoa%"],
        	['id_TH',$id_TH],
        ])->paginate(8);
        return redirect('admin/thuonghieu/timkiem')->with(['thuonghieu'=>$thuonghieu,'tukhoa'=>$tukhoa]);  
    }

    //xóa thuong hiệu
    public function getXoa($id_TH){
        sanpham::where('id_TH',$id_TH)->delete();
        chude::where('id_TH',$id_TH)->delete();
        thuonghieu::where('id_TH',$id_TH)->delete();

        return redirect('admin/thuonghieu/danhsachthuonghieu')->with('thongbao','Bạn Đã Xóa Thành Công');
    }
}
