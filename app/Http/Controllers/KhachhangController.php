<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\khachhang;

class KhachhangController extends Controller
{
    public function getDanhsach(){
    	$khachhang = khachhang::all();
    	return view('admin.khachhang.danhsach',['khachhang'=>$khachhang]);
    }

    public function getXem($id_KH){
    	$khachhang = khachhang::where('id_KH',$id_KH)->first();
    	return view('admin.khachhang.xem',['khachhang'=>$khachhang]);
    }

    //thêm khach hang
    public function getThem(){
    	return view('admin.khachhang.them');
    }
    public function postThem(Request $request){
    	$this->validate($request,[
    		[
    			'tenkh'=>'required|min:3|max:100',
    			'taikhoan'=>'required|unique:admin, username|min:3|max:32',
    			'pass'=>'required|min:3|max:32',
    		],
    		[
    			'tenkh.required'=>'Bạn Chưa Nhập Họ Tên Khách Hàng ',
    			'taikhoan.unique'=>'Tên Tài Khoản Đã Tồn Tại',
    			'taikhoan.min'=> 'Tên tài khoản phải dài từ 3 - 32 kí tự',
    			'taikhoan.max'=> 'Tên tài khoản phải dài từ 3 - 32 kí tự',
    			'pass.min'=> 'Tên tài khoản phải dài từ 3 - 32 kí tự',
    			'pass.max'=> 'Tên tài khoản phải dài từ 3 - 32 kí tự',
    		]
    	]);
        
    	$tenkh = $request->tenkh;
        $taikhoan = $request->taikhoan;
        $pass = $request->pass;
        $ngaysinh = $request->ngaysinh;
        $email = $request->email;
        $sdt = $request->sdt;
        $diachi = $request->diachi;
    	$khachhang = new khachhang;
        $khachhang->HoTenKH = $tenkh;
        $khachhang->TenTK = $taikhoan;
        $khachhang->MatKhau = $pass;
        $khachhang->NgaySinhKH = $ngaysinh;
        $khachhang->EmailKH = $email;
        $khachhang->DienThoaiKH = $sdt;
        $khachhang->DiaChiKH = $diachi;
    	$khachhang->save();

    	return redirect('admin/khachhang/themkhachhang')->with('thongbao','Thêm Thành Công');

    }
    //xóa khach hang
    public function getXoa($id_KH){
        khachhang::where('id_KH',$id_KH)->delete();
       

        return redirect('admin/khachhang/danhsachkhachhang')->with('thongbao','Bạn Đã Xóa Thành Công');
    }

}
