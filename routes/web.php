<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ThuongHieuController;
use App\Http\Controllers\ChudeController;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\KhachhangController;
use App\Http\Controllers\DondathangController;


Route::get('/login-test', function () {
    session(['TenAD' => 'admin_test']);
    return redirect('/test-admin-middleware');
});

Route::get('/test-admin-middleware', function () {
    return 'Bạn đã qua middleware!';
})->middleware('adminmiddleware');
Route::get('/', function () {
    return view('welcome');
});


/*Dây là route danh cho nguoi dung*/
//index
Route::get('home',[PagesController::class, 'home'])->name('home');
//about
Route::get('about',[PagesController::class, 'about']);
//contact
Route::get('contact', [PagesController::class, 'contact']);
//shop hiển thị tất cả sản phẩm
Route::get('shop',[PagesController::class, 'shop']);
//shop san pham theo danh muc
Route::get('shop/{id_TH}-{id_CD}',[PagesController::class, 'getLoaiSP']);
// Route::get('shop','PagesController@getLoaiSP');
//single
Route::get('single/{id_TH}-{id_CD}',[PagesController::class, 'chitietsanpham']);
//tìm kiếm sản phẩm
Route::get('search',[PagesController::class, 'timkiem']);
//addtoCart
Route::get('addtocart/{id_TH}', [PagesController::class, 'AddToCart']);
//checkout
Route::get('giohang',[PagesController::class, 'getCheckout'])->name('giohang');
// Them mot san pham vao gio hang
Route::get('themgiohang{id_sp}',[PagesController::class, 'themgiohang']);
// Giam mot san pham trong gio hang
Route::get('tru{id_sp}', [PagesController::class, 'TruSP']);
// tang mot san pham trong gio hang
Route::get('cong{id_sp}', [PagesController::class, 'CongSP']);
// Xoa hang
Route::get('xoahang/{id_SP}', [PagesController::class, 'getXoa']);
//dangnhap
Route::get('dangnhap', [PagesController::class, 'getDangnhap'])->name('dangnhap');
Route::post('dangnhap', [PagesController::class, 'postDangnhap']);
//đăng xuất
Route::get('logout', [PagesController::class, 'getDangxuat'])->name('logout');
//dangki
Route::get('dangki', [PagesController::class, 'getDangki']);
Route::post('dangki', [PagesController::class, 'postDangki']);
// dathang
Route::get('dathang', [PagesController::class, 'getDathang']);

/* Đây la phan route danh cho cac trang cua admin*/
Route::get('admin/login', [AdminController::class, 'getloginAdmin']);
Route::post('admin/login', [AdminController::class, 'postloginAdmin'])->name('login');
Route::get('logoutAdmin', [AdminController::class, 'getLogoutAdmin'])->name('logoutadmin');
// các route cho các thu muc trong admin
Route::prefix('admin')->group(function () {

    Route::get('home', [PagesController::class, 'pageAdmin']);

    Route::prefix('thuonghieu')->group(function () {
        Route::get('danhsachthuonghieu', [ThuongHieuController::class, 'getDanhsach'])->name('DSThuongHieu');
        Route::get('suathuonghieu/{id_TH}', [ThuongHieuController::class, 'getSua']);
        Route::post('suathuonghieu', [ThuongHieuController::class, 'postSua'])->name('SuaThuongHieu');
        Route::get('themthuonghieu', [ThuongHieuController::class, 'getThem']);
        Route::post('themthuonghieu', [ThuongHieuController::class, 'postThem']);
        Route::get('xemthuonghieu/{id_TH}', [ThuongHieuController::class, 'getXem']);
        Route::get('xoathuonghieu/{id_TH}', [ThuongHieuController::class, 'getXoa']);
        Route::get('timkiem', [ThuongHieuController::class, 'getTimkiem']);
    });

    Route::prefix('chude')->group(function () {
        Route::get('danhsachchude', [ChudeController::class, 'getDanhsach'])->name('DSchude');
        Route::get('xoachude/{id_CD}', [ChudeController::class, 'getXoa']);
        Route::get('themchude', [ChudeController::class, 'getThem']);
        Route::post('themchude', [ChudeController::class, 'postThem']);
        Route::get('suachude/{id_CD}', [ChudeController::class, 'getSua']);
        Route::post('suachude', [ChudeController::class, 'postSua'])->name('SuaChuDe');
    });

    Route::prefix('taikhoan')->group(function () {
        Route::get('danhsachtaikhoan', [AdminController::class, 'getDanhsach']);
        Route::get('xemadmin/{id_Ad}', [AdminController::class, 'getXem'])->name('XemTaiKhoanAD');
        Route::get('themadmin', [AdminController::class, 'getThem']);
        Route::post('themadmin', [AdminController::class, 'postThem']);
        Route::get('suaadmin/{id_Ad}', [AdminController::class, 'getSua']);
        Route::post('suaadmin', [AdminController::class, 'postSua'])->name('SuaAdmin');
        Route::get('xoaadmin/{id_Ad}', [AdminController::class, 'getXoa']);
    });

    Route::prefix('sanpham')->group(function () {
        Route::get('danhsachsanpham', [SanphamController::class, 'getDanhsach']);
        Route::get('xemsanpham/{id_SP}', [SanphamController::class, 'getXem']);
        Route::get('themsanpham', [SanphamController::class, 'getThem']);
        Route::post('themsanpham', [SanphamController::class, 'postThem'])->name('ThemSanPham');
        Route::get('suasanpham/{id_SP}', [SanphamController::class, 'getSua']);
        Route::post('suasanpham', [SanphamController::class, 'postSua'])->name('SuaSanPham');
        Route::get('xoasanpham/{id_SP}', [SanphamController::class, 'getXoa']);
    });

    Route::prefix('khachhang')->group(function () {
        Route::get('danhsachkhachhang', [KhachhangController::class, 'getDanhsach']);
        Route::get('xemkhachhang/{id_KH}', [KhachhangController::class, 'getXem']);
        Route::get('themkhachhang', [KhachhangController::class, 'getThem']);
        Route::post('themkhachhang', [KhachhangController::class, 'postThem'])->name('ThemKhachHang');
        Route::get('suakhachhang/{id_KH}', [KhachhangController::class, 'getSua']);
        Route::post('suakhachhang', [KhachhangController::class, 'postSua']);
        Route::get('xoakhachhang/{id_KH}', [KhachhangController::class, 'getXoa']);
    });

    Route::prefix('dondathang')->group(function () {
        Route::get('danhsachdonhang', [DondathangController::class, 'getDanhsach']);
        Route::get('xemdonhang{id_Bill}', [DondathangController::class, 'getXem']);
        Route::get('giaohang/{id_Bill}', [DondathangController::class, 'giaohang']);
    });
});