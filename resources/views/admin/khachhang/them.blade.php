@extends('admin.layout.index')
@section('content')
<!-- Main content -->
<a href="admin/khachhang/danhsachkhachhang"><i class="fa  fa-arrow-circle-left"></i>  <strong> Trở Về</strong></a>
    <section class="content-header" >
      <div class="row">
        <!-- left column -->
        <div class="col-md-6" >
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Thêm Khách Hàng </h3>
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
            <!-- /.box-header -->
            <!-- form start -->
            <form action="admin/khachhang/themkhachhang" method="post" nctype="multipart/form-data">
            	<input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="box-body">
                <div class="form-group">
                  <label >Họ Tên</label>
                  <input type="text" class="form-control" id="" name="tenkh" placeholder="Nhập Tên Khách Hàng">
                </div>
                <div class="form-group">
                  <label >Tài Khoản</label>
                  <input type="text" class="form-control" id="" name="taikhoan" placeholder="Nhập Tên Tài Khoản Khách Hàng ">
                </div>
                <div class="form-group">
                  <label >Mật Khẩu</label>
                  <input type="password" class="form-control" id="" name="pass" >
                </div>
                <div class="form-group">
                  <label >Ngày Sinh</label>
                  <input type="date" class="form-control" id="" name="ngaysinh" placeholder="">
                </div>
                <div class="form-group">
                  <label >Email</label>
                  <input type="text" class="form-control" id="" name="email" placeholder="Nhập Email Khách Hàng">
                </div>
                <div class="form-group">
                  <label >Điện Thoại</label>
                  <input type="text" class="form-control" id="" name="sdt" placeholder="Nhập Số Điện Thoại Khách Hàng">
                </div>
                <div class="form-group">
                  <label >Địa Chỉ</label>
                  <input type="text" class="form-control" id="" name="diachi" placeholder="Nhập Địa Chỉ Khách Hàng">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Thêm</button>
              </div>
            </form>
          </div>
         </div>
     </div>
    </section>
    <!-- /.content -->
@endsection