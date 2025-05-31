@extends('admin.layout.index')
@section('content')

    <!-- Content Header (Page header) -->
   <a href="admin/thuonghieu/danhsachthuonghieu"><i class="fa  fa-arrow-circle-left"></i> <strong> Trở Về</strong></a>

    <!-- Main content -->
    <section class="content-header">
      <!-- ./col -->

        <div class="col-md-12">
          
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Xem Chi Tiết Thương Hiệu: </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <dl class="dl-horizontal">
                <dt>ID</dt>
                <dd>{{$thuonghieu->id_TH}}</dd>
                <dt>Tên Thương Hiệu</dt>
                <dd>{{$thuonghieu->TenTH}}</dd>
                <dt>Mô Tả</dt>
                <dd>{{$thuonghieu->Description}}</dd>
                <dt>Ảnh Đại Diện</dt>
                <dd>
                	<img src="images/{{$thuonghieu->ImgTH}}" alt="" class="img-fluid w-25" width="200px">
                </dd>
                
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