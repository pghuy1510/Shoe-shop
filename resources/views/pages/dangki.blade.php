@extends('layout.master')
@section('home')
<!-- đây là nội dung trang -->
<div class="container"> 
 
 <div class="row"> 
  <div class="col-md-6">
          <!-- general form elements -->
  
    <div class="box-header with-border">
       <h3 class="box-title">Đăng Kí Thành Viên</h3>
    </div>
    <br>  
    @if(count($errors)>0)
              <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                  {{$err}}
                @endforeach
              </div>
     @endif
    @if(session('thongbao'))
              <div class="alert alert-danger">
                {{session('thongbao')}}
              </div>
    @endif 
    <form action="dangki" method="post" nctype="multipart/form-data"> 
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="form-group">
        <label >Họ Tên</label>
        <input type="text" name="hoten" placeholder="Nhập Họ Tên Của Bạn">
      </div>
      <div class="form-group">
        <label >Tên Tài Khoản</label>
        <input type="text"  name="taikhoan" placeholder="Nhập Tên Tài Khoản" > 
      </div>
      <div class="form-group">
        <label >Mật Khẩu</label>
        <input type="password" name="pass" placeholder=" Nhập Mật khẩu" >
      </div>
      <!-- <div class="form-group">
        <label >Nhập Lại Mật Khẩu</label> 
        <input type="password" name="repass" placeholder="Nhập lại mật khẩu" > 
      </div> -->
      <div class="form-group">
        <label >Ngày Sinh</label>
        <input type="date" name="ngaysinh">
      </div>
      <div class="form-group">
        <label >Email</label> 
        <input type="text" name="email" placeholder="Nhập email">
      </div>
      <div class="form-group">
        <label >Điện Thoại</label>
        <input type="text" name="dienthoai" placeholder="Nhập Số Điện Thoại Liên Hệ">
      </div>
      <div class="form-group">
        <label >Địa Chỉ</label>
        <input type="text" name="diachi" placeholder="Nhập Địa Chỉ Liên Hệ">
      </div>
     
  
    
    
    <button class="btn btn-primary" type="submit"> Đăng ký</button> 
   </form> 
  
 
 </div>
 </div>
</div>
@endsection