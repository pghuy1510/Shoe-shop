<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanpham;
use App\Models\thuonghieu;
use App\Models\chude;
use App\Models\khachhang;
use App\Models\comment;
use App\Models\dondathang;
use App\Models\chitietdonhang;
use App\Models\Cart;
use App\Models\giohang;
use Session;

class PagesController extends Controller
{
    //trang chủ
    public function home(){
    	$sanpham = sanpham::all();
        $giohang = giohang::all();
        $sl = count($giohang);
    	// dd($sanpham);
    	return view('pages.home', compact('sanpham','sl'));
    }

    //trang cửa hàng
    public function shop(){
        $giohang = giohang::all();
        $sl = count($giohang);
        $sanpham = sanpham::paginate(12);
        $thuonghieu = thuonghieu::all();
        return view('pages.shop',compact('thuonghieu','sanpham','sl'));
    }

    //trang giới thiệu
    public function about(){
        
        $giohang = giohang::all();
        $sl = count($giohang);
        // dd($sanpham);
        return view('pages.about', compact('sl'));
    }
    //trang liên hệ
    public function contact(){
        
        $giohang = giohang::all();
        $sl = count($giohang);
        // dd($sanpham);
        return view('pages.contact', compact('sl'));
    }


    // lấy sản phẩm thuộc thuong hieu và chủ đề
    public function getLoaiSP($id_TH,$id_CD)
    {
        $giohang = giohang::all();
        $sl = count($giohang);
        $thuonghieu = thuonghieu::all();
        $sanpham = sanpham::where([
            ['id_TH',$id_TH],
            ['id_CD',$id_CD],
        ])->paginate(8);
        $chude = chude::where([
            ['id_TH',$id_TH],
            ['id_CD',$id_CD],
        ])->first();
        $idTH = $id_TH;
        return view('pages.shop',['sanpham'=>$sanpham,'thuonghieu'=>$thuonghieu,'chude'=>$chude,'idTH'=>$idTH,'sl'=>$sl]);       
    }

    //chi tiết 1 sản phẩm
    public function chitietsanpham($id_CD,$id_SP){
        $giohang = giohang::all();
        $sl = count($giohang);
        $sanpham = sanpham::where('id_SP',$id_SP)->first();
        $sp_tuongtu = sanpham::where([
            ['id_CD',$id_CD],
            ['id_SP','!=',$id_SP],
        ])->paginate(4);
        $comment = comment::where('id_SP',$id_SP)->get();
        $nguoidung = khachhang::all();
        return view('pages.single',['sanpham'=>$sanpham,'sp_tuongtu'=>$sp_tuongtu,'comment'=>$comment,'nguoidung'=>$nguoidung ,'sl'=>$sl]);
        
    }

    
    //tìm kiếm sản phẩm
    public function timkiem(Request $request){
        $giohang = giohang::all();
        $sl = count($giohang);
        $tukhoa = $request->tukhoa;
        $sanpham = sanpham::where('TenSP','like',"%$tukhoa%")->orwhere('GiaSP','like',"%$tukhoa%")->orwhere('GiaSale','like',"%$tukhoa%")->paginate(8);
        return view('pages.search',['sanpham'=>$sanpham,'tukhoa'=>$tukhoa,'sl'=>$sl]);
        
    }

    //trang chi triết giỏ hàng
    public function getCheckout(){
        $giohang = giohang::all();
        $sanpham = sanpham::all();
        $tongtien = 0 ;
        foreach($giohang as $gh)
        {
            $tongtien = $tongtien + $gh->Gia;
        }
        $sl = count($giohang);
        return view('pages.giohang',compact('sl','giohang','sanpham','tongtien'));
    }
    // Giam mot san pham trong gio hang
    public function TruSP($id_sp)
    {   
        $sanpham = sanpham::where('id_SP',$id_sp)->first();
        $giohang = giohang::where('id_SP',$id_sp)->first();
       
        giohang::where('id_SP',$id_sp)->update(['SoLuong'=>$giohang->SoLuong - 1,'Gia'=>$sanpham->GiaSP * ($giohang->SoLuong - 1)]);
        $giohangall = giohang::all();
        $tongtien = 0;
        foreach($giohangall as $gh)
        {
            $tongtien = $tongtien + $gh->Gia;
        }
        $giohang2 = giohang::where('id_SP',$id_sp)->first();
        $Gia = $giohang2->Gia;
        $mang = [$Gia,$tongtien];
        return $mang;
    }
     // Giam mot san pham trong gio hang
    public function CongSP($id_sp)
    {
        $sanpham = sanpham::where('id_SP',$id_sp)->first();
        $giohang = giohang::where('id_SP',$id_sp)->first();
        giohang::where('id_SP',$id_sp)->update(['SoLuong'=>$giohang->SoLuong + 1,'Gia'=>$sanpham->GiaSP * ($giohang->SoLuong + 1)]);
        $giohangall = giohang::all();
        $tongtien = 0;
        foreach($giohangall as $gh)
        {
            $tongtien = $tongtien + $gh->Gia;
        }
        $giohang2 = giohang::where('id_SP',$id_sp)->first();
        $Gia = $giohang2->Gia;
        $mang = [$Gia,$tongtien];
        // return $Gia;
        return $mang;
    }
    public function getXoa($id_SP){
        $giohang = giohang::where([
            ['id_SP',$id_SP],
            ['id_KH',session('idKH')]
        ])->delete();
        return redirect()->route('giohang');


    }
    //trang đăng nhập
    public function getDangNhap(){
       $giohang = giohang::all();
        $sl = count($giohang);
        return view('pages.dangnhap', compact('sl'));
    }
    public function postDangNhap(Request $request){
        $taikhoan = $request->taikhoan;
        $pass = $request->pass;
        $login = khachhang::where([
            [
                'TenTK',$taikhoan
            ],
            [
                'MatKhau',$pass
            ]

        ])->first();
        if(empty($login))
        {
                
              return redirect('dangnhap'); 
        }
        else
        {
            session()->put('TenKH',$login->HoTenKH);
            session()->put('idKH',$login->id_KH);
            session()->put('email',$login->EmailKH);
            session()->put('dienthoai',$login->DienThoaiKH);
            session()->put('diachi',$login->DiaChiKH);
            
            
            return redirect()->route('home');
        }
    }
    
    public function getDangxuat(Request $request){
        $request->session()->flush();
        return redirect()->route('home');
    }
    //trang đăng kí
    public function getDangki(){
        $giohang = giohang::all();
        $sl = count($giohang);
        return view('pages.dangki',['sl'=>$sl]);
    }
    public function postDangKi(Request $request){
        $this->validate($request,[
            [
                'hoten'=>'required|min:3|max:100',
                'taikhoan'=>'required|unique:admin, username|min:3|max:32',
                'pass'=>'required|min:3|max:32',
            ],
            [
                'hoten.required'=>'Bạn Chưa Nhập Họ Tên ADMIN ',
                'taikhoan.unique'=>'Tên Tài Khoản Đã Tồn Tại',
                'taikhoan.min'=> 'Tên tài khoản phải dài từ 3 - 32 kí tự',
                'taikhoan.max'=> 'Tên tài khoản phải dài từ 3 - 32 kí tự',
                'pass.min'=> 'Tên tài khoản phải dài từ 3 - 32 kí tự',
                'pass.max'=> 'Tên tài khoản phải dài từ 3 - 32 kí tự',
            ]
        ]);
        // foreach()
        // {
        //     if()
        // }
        $hoten = $request->hoten;
        $taikhoan = $request->taikhoan;
        $pass = $request->pass;
        $ngaysinh = $request->ngaysinh;
        $email = $request->email;
        $dienthoai = $request->dienthoai;
        $diachi = $request->diachi;
        $khachhang = new khachhang;
        $khachhang->HoTenKH = $hoten;
        $khachhang->TenTK = $taikhoan;
        $khachhang->MatKhau = $pass;
        $khachhang->NgaySinhKH = $ngaysinh;
        $khachhang->EmailKH = $email;
        $khachhang->DiaChiKH = $diachi;
        $khachhang->DienThoaiKH = $dienthoai;
        $khachhang->save();
        return redirect('dangki')->with('thongbao','Đăng Kí Thành Công');
    }

    

    //Them mot san pham vao gio hang
    public function themgiohang($id_sp)
    {
        if(empty(session('idKH')))
        {

            return 'Vui lòng đăng nhập trước!';
        }
        else
        {
            $sanpham = sanpham::where('id_SP',$id_sp)->first(); 
            $demhang = giohang::where('id_SP',$id_sp)->get();
            $sl = count($demhang);

            if($sl != 0)
            {
                giohang::where('id_SP',$id_sp)->update(['SoLuong'=>$sl+1,'Gia'=>$sanpham->GiaSP*($sl+1)]);
            }
            else
            {
                $giohang = new giohang;
                $giohang->id_SP = $id_sp;
                $giohang->id_KH = session('idKH');
                $giohang->SoLuong = 1;
                $giohang->Gia = $sanpham->GiaSP;
                $giohang->save();
            }
            return 'Đã thêm vào giỏ hàng!'; 
        }
    }

    //trang admin
    public function pageAdmin(){
        return view('admin.home');
    }

    public function getDathang(){
        $giohang = giohang::where('id_KH',session('idKH'))->get();
        $sl = count($giohang);
        $tongtien = 0;
        foreach ($giohang as $gh) 
        {
            $tongtien += $gh->Gia;
        }
        // Tao don dat hang
        $dondathang = new dondathang();
        $dondathang->id_KH = session('idKH');
        $dondathang->TongTien = $tongtien;
        $dondathang->Payment = 'BaoKim';
        $dondathang->TinNhanKH = 'Đây là tin nhắn của khách hàng';
        $dondathang->TrangThai = 0;
        $dondathang->save();

        $ddh = dondathang::orderBy('id_Bill','desc')->first();

        // Tao cac san pham chi tiet don dat hang
        foreach ($giohang as $gh) {
            $ctdh = new chitietdonhang;
            $ctdh->id_Bill = $ddh->id_Bill;
            $ctdh->id_SP = $gh->id_SP;
            $ctdh->SoLuong = $gh->SoLuong;
            $ctdh->save();
        }

        // Xoa cac san pham trong gio hang di
        giohang::where('id_KH',session('idKH'))->delete();

        return view('pages.dathang',['sl'=>$sl]);
        //return $next_ddh;
    }
}
