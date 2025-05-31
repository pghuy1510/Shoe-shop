@extends('admin.layout.index')
@section('content')
   <a href="admin/dondathang/danhsachdonhang"><i class="fa  fa-arrow-circle-left"></i> <strong> Trở Về</strong></a>

    <!-- Main content -->
    <section class="content-header">
      <!-- ./col -->

        <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Xem Thông Tin Đơn Hàng: </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <dl class="dl-horizontal">
                <dt>Họ Tên Khách Hàng</dt>
                <dd>{{$khachhang->HoTenKH}}</dd>
                <dt>Địa Chỉ</dt>
                <dd>{{$khachhang->DiaChiKH}}</dd>
                <dt>Email</dt>
                <dd>{{$khachhang->EmailKH}}</dd>
                <dt>Điện Thoai</dt>
                <dd>{{$khachhang->DienThoaiKH}}</dd>
              </dl> 

              <table id="example1" class="table table-bordered table-striped">
                <tr>
                  <th>Mã Sản Phẩm</th>
                  <th>Tên Sản Phẩm</th>
                  <th>Ảnh Sản Phẩm</th>
                  <th>Số Lượng</th>
                  <th>Giá</th>
                </tr>
                @foreach($ctdh as $ct)
                @foreach($sanpham as $sp)
                @if($ct->id_SP == $sp->id_SP)
                <tr>
                  <td>{{$sp->id_SP}}</td>  
                  <td>{{$sp->TenSP}}</td>
                  <td><img src="images/{{$sp->ImgSP}}" width="30%"></td>
                  <td>{{$ct->SoLuong}}</td>
                  <td><?php 
                  echo $ct->SoLuong*$sp->GiaSP; ?></td>
                  
                </tr> 
                @endif
                @endforeach
                  @endforeach           
              </table>
            </div>

            <!-- /.box-body -->
          </div>

          <!-- /.box -->
        </div>
        <!-- ./col -->
    </section>
    <!-- /.content -->
    @endsection