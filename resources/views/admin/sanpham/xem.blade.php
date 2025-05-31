@extends('admin.layout.index')
@section('content')
<a href="admin/sanpham/danhsachsanpham"><i class="fa  fa-arrow-circle-left"></i>  <strong> Trở Về</strong></a>
<section class="content-header">
      <!-- ./col -->

        <div class="col-md-12">
          
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Xem Sản Phẩm: {{$sanpham->TenSP}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl class="dl-horizontal">
                <dt>ID</dt>
                <dd>{{$sanpham->id_SP}}</dd>
                <dt>Tên Sản Phẩm</dt>
                <dd>{{$sanpham->TenSP}}</dd>
                <dt>Thuộc Thương Hiệu</dt>
                <dd>{{$thuonghieu->TenTH}}</dd>
                <dt>Thuộc Chủ Đề</dt>
                <dd>{{$chude->TenCD}}
                </dd>
                <dt>Giá Sản Phẩm</dt>
                <dd>{{$sanpham->GiaSP}}
                </dd>
                <dt>Giá Sale</dt>
                <dd>{{$sanpham->GiaSale}}
                </dd>
                <dt>Mô Tả</dt>
                <dd>{{$sanpham->MoTa}}
                </dd>
                <dt>Hình Ảnh Sản Phẩm</dt>
                <dd>
                  <img src="images/{{$sanpham->ImgSP}}" alt="" class="img-fluid w-25" width="200px">
                </dd>
              </dl>
            </div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
    </section>
@endsection