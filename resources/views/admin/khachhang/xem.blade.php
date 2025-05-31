@extends('admin.layout.index')
@section('content')

    <!-- Content Header (Page header) -->
   <a href="admin/khachhang/danhsachkhachhang"><i class="fa  fa-arrow-circle-left"></i> <strong> Trở Về</strong></a>

    <!-- Main content -->
    <section class="content-header">
      <!-- ./col -->

        <div class="col-md-12">
          
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Xem Thông Tin Khách Hàng: {{$khachhang->HoTenKH}} </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <dl class="dl-horizontal">
                <dt>Họ Tên</dt>
                <dd>{{$khachhang->HoTenKH}}</dd>
                <dt>Tên Tài Khoản</dt>
                <dd>{{$khachhang->TenTK}}</dd>
                <dt>Mật Khẩu</dt>
                <dd>{{$khachhang->MatKhau}}</dd>
                <dt>Ngày Sinh</dt>
                <dd>{{$khachhang->NgaySinhKH}}</dd>
                <dt>Email</dt>
                <dd>{{$khachhang->EmailKH}}</dd>
                <dt>Điện Thoại</dt>
                <dd>{{$khachhang->DienThoaiKH}}</dd>
                <dt>Địa Chỉ</dt>
                <dd>{{$khachhang->DiaChiKH}}</dd>
                
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