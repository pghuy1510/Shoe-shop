@extends('layout.master')
@section('home')
<!-- đây là nội dung trang -->

<div class="container"> 

  <div class="row"> 
    <div class="col-md-6 ml-5">
      <!-- general form elements -->

      <div class="box-header with-border">
       <h3 class="box-title">Đăng Nhập</h3>
     </div>
     <br>   
     <form action="dangnhap" method="post" > 
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <table>
        <tr style="padding-bottom: 5px;">
          <td>Tên Đăng Nhập</td>
          <td>
            <input type="text" name="taikhoan">
          </td>
        </tr>
        <tr>
          <td>Mật Khẩu</td>
          <td>
            <input type="password" name="pass">
          </td>
        </tr>

      </table>
      <input type="submit" name=""  value="Đăng Nhập">
    </form> 


  </div>
</div>
</div>

@endsection