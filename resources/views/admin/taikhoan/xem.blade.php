@extends('admin.layout.index')
@section('content')

    <!-- Content Header (Page header) -->
   <a href="admin/taikhoan/danhsachtaikhoan"><i class="fa  fa-arrow-circle-left"></i> <strong> Trở Về</strong></a>

    <!-- Main content -->
    <section class="content-header">
      <!-- ./col -->

        <div class="col-md-12">
          
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Xem Thông Tin Tài Khoản: </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <dl class="dl-horizontal">
                <dt>ID</dt>
                <dd>{{$admin->id_Ad}}</dd>
                <dt>Họ Tên</dt>
                <dd>{{$admin->HoTen}}</dd>
                <dt>Tài Khoản</dt>
                <dd>{{$admin->Username}}</dd>
                <dt>Mật Khẩu</dt>
                <dd>{{$admin->Password}}</dd>
                <dt>Ngày Sinh</dt>
                <dd>{{$admin->NgaySinh}}</dd>
                <dt>Email</dt>
                <dd>{{$admin->EmailAd}}</dd>
                <dt>Điện Thoại</dt>
                <dd>{{$admin->DienThoai}}</dd>
                <dt>Địa Chỉ</dt>
                <dd>{{$admin->DiaChi}}</dd>
              </dl>
              
            </div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
    </section>
    <!-- /.content -->
 
 
@endsection