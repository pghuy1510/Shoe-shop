<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
class AdminController extends Controller
{
    public function getloginAdmin(){
		return view('admin.login');
	}
	public function postloginAdmin(Request $request){
		
        $username = $request->username;
        $password = $request->pass;
        $login = admin::where([
            [
                'Username',$username
            ],
            [
                'Password',$password
            ]

        ])->first();
        if(empty($login))
        {
                
              return redirect('admin/login'); 
        }
        else
        {
            session()->put('id_admin',$login->id_Ad);
            session()->put('TenAD',$login->HoTen);

            return view('admin.home');
        }

	}
    public function getLogoutAdmin(Request $request){
        $request->session()->flush();
        return redirect()->route('login');
    }

	//danh sach admin
    public function getDanhsach(){
    	$admin = admin::all();
    	
    	return view('admin.taikhoan.danhsach',['admin'=>$admin]);
    }

    //xem chi tiết tài khoan admin
    public function getXem($id_Ad){
    	$admin = admin::where('id_Ad',$id_Ad)->first();
    	return view('admin.taikhoan.xem',['admin'=>$admin]);
    }

    //thêm tai khoan admin
    public function getThem(){
    	return view('admin.taikhoan.them');
    }
    public function postThem(Request $request){

    	$this->validate($request,[
    		[
    			'hoten'=>'required|min:3|max:100',
    			'username'=>'required|unique:admin, username|min:3|max:32',
    			'pass'=>'required|min:3|max:32',
    		],
    		[
    			'hoten.required'=>'Bạn Chưa Nhập Họ Tên ADMIN ',
    			'username.unique'=>'Tên Tài Khoản Đã Tồn Tại',
    			'username.min'=> 'Tên tài khoản phải dài từ 3 - 32 kí tự',
    			'username.max'=> 'Tên tài khoản phải dài từ 3 - 32 kí tự',
    			'pass.min'=> 'Tên tài khoản phải dài từ 3 - 32 kí tự',
    			'pass.max'=> 'Tên tài khoản phải dài từ 3 - 32 kí tự',
    		]
    	]);

        $username = $request->username;
        $email = $request->email;
        $admin = admin::all();
        foreach($admin as $ad)
        {
            if($ad->Username == $username)
            {
                return redirect('admin/taikhoan/themadmin')->with('thongbao','Tên Tài Khoản Đã Tồn Tại');
            }
            if($ad->EmailAD == $email)
            {
                return redirect('admin/taikhoan/themadmin')->with('thongbao','Tài Khoản email Đã Tồn Tại');
            }
        }

    	$hoten = $request->hoten;
        
        $pass = $request->pass;
         $ngaysinh = $request->ngaysinh;
        
        $dienthoai = $request->dienthoai;
        $diachi = $request->diachi;
    	$admin = new admin;
        $admin->HoTen = $hoten;
        $admin->Username = $username;
        $admin->Password = $pass;
        $admin->NgaySinh = $ngaysinh;
        $admin->EmailAd = $email;
        $admin->DienThoai = $dienthoai;
        $admin->DiaChi = $diachi;
    	$admin->save();

    	return redirect('admin/taikhoan/themadmin')->with('thongbao','Thêm Thành Công');
    //return $ngaysinh; 

    }

    //edit tai khoan admin
    public function getSua($id_Ad){
        $admin = admin::where('id_Ad',$id_Ad)->first();
        return view('admin.taikhoan.sua', ['admin'=>$admin]);
    }
    public function postSua(Request $request){
        
            $this->validate($request,[
            [
                'hoten'=>'required|min:3|max:100',
                
                'pass'=>'required|min:3|max:32',
            ],
            [
                'hoten.required'=>'Bạn Chưa Nhập Họ Tên ADMIN ',
                'pass.min'=> 'Tên tài khoản phải dài từ 3 - 32 kí tự',
                'pass.max'=> 'Tên tài khoản phải dài từ 3 - 32 kí tự',
            ]
        ]);

        $id_Ad = $request->id_ad;
        $hoten = $request->hoten;
        $username = $request->username;
        $pass = $request->pass;
        //$ngaysinh = $request->ngaysinh;
        $email = $request->email;
        $dienthoai = $request->dienthoai;
        $diachi = $request->diachi;
        $admin = admin::where('id_Ad',$id_Ad)->update(['HoTen'=>$hoten,'Username'=>$username,'Password'=>$pass,'EmailAd'=>$email,'DienThoai'=>$dienthoai,'DiaChi'=>$diachi]);
        
        

        return redirect('admin/taikhoan/suaadmin/'.$id_Ad)->with('thongbao','Sửa Thành Công');
        
        
    }
    
    //xoa admin
    public function getXoa($id_Ad){
        $admin = admin::where('id_Ad',$id_Ad)->delete();
        return redirect('admin/taikhoan/danhsachtaikhoan')->with('thongbao','Bạn Đã Xóa Thành Công');
    }

}
