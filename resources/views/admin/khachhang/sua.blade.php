@extends('admin.layout.index')
@section('content')
<a href="admin/taikhoan/danhsachtaikhoan"><i class="fa  fa-arrow-circle-left"></i>   <strong>Trở Về</strong></a>

    <!-- Main content -->
    <section class="content-header">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Sửa Admin: {{$admin->HoTen}}</h3>
            </div>
            @if(count($errors)>0)
              <div class="alert alert-danger">
                @foreach($erros->all() as $err)
                  {{$err}}
                @endforeach
              </div>
            @endif

            @if(session('thongbao'))
              <div class="alert alert-danger">
                {{session('thongbao')}}
              </div>
            @endif
              <!-- form start -->
            <form action="{{route('SuaAdmin')}}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input type="hidden" name="id_ad" value="{{$admin->id_Ad}}">
              <div class="box-body">
                <div class="form-group">
                  <label >Họ Tên</label>
                  <input type="text" class="form-control" id="" name="hoten" value="{{$admin->HoTen}}" placeholder="{{$admin->HoTen}}">
                </div>
                <div class="form-group">
                  <label >Tên Tài Khoản</label>
                  <input type="text" class="form-control" id="" name="username" value="{{$admin->Username}}" readonly>
                </div>
                <div class="form-group">
                  <label >Mật Khẩu</label>
                  <input type="password" class="form-control" id="" name="pass" placeholder="Nhập Mật Khẩu" value="{{$admin->Password}}">
                </div>
              
                <div class="form-group">  
                  <label >Ngày sinh</label>
                  <input type="date" class="form-control" id="" name="ngaysinh" placeholder="{{$admin->NgaySinh}}">
                </div>
                </div>
                <div class="form-group">
                  <label >Email</label>
                  <input type="text" class="form-control" id="" name="email" placeholder="{{$admin->EmailAd}}">
                </div>
                <div class="form-group">
                  <label >Điện Thoai</label>
                  <input type="text" class="form-control" id="" name="dienthoai" placeholder="{{$admin->DienThoai}}">
                </div>
                <div class="form-group">
                  <label >Địa Chỉ</label>
                  <input type="text" class="form-control" id="" name="diachi" placeholder="{{$admin->DiaChi}}">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                
                <input type="submit" class="btn btn-primary" value="Sửa">
              </div>
            </form>
          </div>
         </div>
     </div>
    </section>
    <!-- /.content -->
@endsection