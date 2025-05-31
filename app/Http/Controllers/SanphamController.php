<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\sanpham;
use App\Models\thuonghieu;
use App\Models\chude;
class SanphamController extends Controller
{
    public function getDanhsach(){
    	$sanpham =sanpham::paginate(4);
    	$chude = chude::all();
    	$thuonghieu = thuonghieu::all();
    	return view('admin.sanpham.danhsach',['sanpham'=>$sanpham,'chude'=>$chude,'thuonghieu'=>$thuonghieu]);
    }

    //thêm san pham
    public function getThem(){
    	$sanpham = sanpham::all();
    	$thuonghieu = thuonghieu::all();
    	$chude = chude::all();
    	return view('admin.sanpham.them',['sanpham'=>$sanpham,'thuonghieu'=>$thuonghieu,'chude'=>$chude]);
    }
    public function postThem(Request $request){
    	// $this->validate($request,[
    	// 	[
    	// 		'tensp'=>'required|unique:sanpham, tensp|min:3|max:100',
    	// 		'giaban'=>'required',

    	// 	],
    	// 	[
    	// 		'tensp.required'=>'Bạn Chưa Nhập Tên Sản Phẩm ',
    	// 		'tensp.unique'=>'Tên Sản Phẩm Đã Tồn Tại',
    	// 		'tensp.min'=> 'Tên thương hiệu phải dài từ 3 - 100 kí tự',
    	// 		'tensp.max'=> 'Tên thương hiệu phải dài từ 3 - 100 kí tự',
    	// 		'giaban'=>'Bạn Chưa Nhập Giá Bán',
    	// 	]
    	// ]);
        if($request->hasFile('myFile'))         
         {             //lưu file  
            $img = $request->file('myFile')->getClientOriginalName();
                    $request->file('myFile')->move(  
                                         'images',    //nơi cần lưu                       
                                         $img     //tên file                      
                                           );
        } 
        else {
              $img="";
        }

    	$tensp = $request->tensp;
        $giaban = $request->giaban;
        $sanpham = sanpham::all();
        // foreach($sanpham as $sp)
        // {
        //     if($sp->TenSP == $tensp)
        //     {
        //         return redirect('admin/sanpham/themsanpham')->with('thongbao','Tên Sản Phẩm Đã Tồn Tại');
        //     }
        //     if($sp->GiaSP == $giaban)
        //     {
        //         return redirect('admin/sanpham/themsanpham')->with('thongbao','Bạn Chưa Nhập Giá Bán');
        //     }
        // }
        $idthuonghieu = $request->idthuonghieu;
        $idchude = $request->idchude;
        
        $giasale = $request->giasale;
        $mota = $request->mota;
    	$sanpham = new sanpham;
        $sanpham->TenSP = $tensp;
        $sanpham->MoTaSP = $mota;
        $sanpham->ImgSP = $img;
        $sanpham->GiaSP = $giaban;
        $sanpham->GiaSale = $giasale;
        $sanpham ->id_CD = $idchude;
        $sanpham->id_TH = $idthuonghieu;
    	$sanpham->save();

    	return redirect('admin/sanpham/themsanpham')->with('thongbao','Thêm Thành Công');
        
        

    }
    //xem san pham
    public function getXem($id_SP){
        $sanpham = sanpham::where('id_SP',$id_SP)->first();
        $chude = chude::where('id_CD',$sanpham->id_CD)->first();
        $thuonghieu = thuonghieu::where('id_TH',$sanpham->id_TH)->first();
        return view('admin.sanpham.xem',['sanpham'=>$sanpham, 'thuonghieu'=>$thuonghieu,'chude'=>$chude]);
    }

    //sua san pham
    public function getSua($id_SP){
        $sanpham = sanpham::where('id_SP',$id_SP)->first();
        $thuonghieu = thuonghieu::all();
        $chude = chude::all();
        return view('admin.sanpham.sua', ['chude'=>$chude,'thuonghieu'=>$thuonghieu,'sanpham'=>$sanpham]);
    }
    public function postSua(Request $request){
        $id_SP = $request->id_sp;
        $idthuonghieu = $request->idthuonghieu;
        $idchude = $request->idchude;
        $tensp = $request->tensp;
        $giaban= $request->giaban;
        $giasale =$request->giasale;
        $mota = $request->mota;
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
           
        $sanpham = sanpham::where('id_SP',$id_SP)->update(['id_TH'=>$idthuonghieu,'id_CD'=>$idchude,'TenSP'=>$tensp,'GiaSP'=>$giaban,'GiaSale'=>$giasale,'MoTaSP'=>$mota,'ImgSP'=>$img]);
        
        return redirect('admin/sanpham/suasanpham/'.$id_SP)->with('thongbao','Sửa Thành Công');       
        
    }

    //xoa san pham
    public function getXoa($id_SP){
        $sanpham = sanpham::where('id_SP',$id_SP)->delete();   
        return redirect('admin/sanpham/danhsachsanpham')->with('thongbao','Xóa Thành Công');
    }
}
