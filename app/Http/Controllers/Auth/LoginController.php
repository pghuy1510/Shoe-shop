<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Hiển thị form đăng nhập
    public function showLoginForm()
    {
        return view('dangnhap'); // đây là view bạn gửi
    }

    // Xử lý đăng nhập
    public function login(Request $request)
    {
        // Validate dữ liệu nhập vào
        $request->validate([
            'taikhoan' => 'required|string',
            'pass' => 'required|string',
        ]);

        // Gán credentials
        $credentials = [
            'email' => $request->taikhoan,  // hoặc 'username' nếu bạn dùng username
            'password' => $request->pass,
        ];

        // Nếu đăng nhập thành công
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        // Nếu đăng nhập thất bại
        return back()->withErrors([
            'taikhoan' => 'Tên đăng nhập hoặc mật khẩu không đúng.',
        ])->withInput($request->only('taikhoan'));
    }

    // Xử lý đăng xuất
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
