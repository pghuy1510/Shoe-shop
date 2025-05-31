@extends('admin.layout.index')
@section('content')
<!-- Main content -->
<a href="admin/chude/danhsachchude"><i class="fa  fa-arrow-circle-left"></i>  <strong> Trở Về</strong></a>
    <section class="content-header" >
      <div class="row">
        <!-- left column -->
        <div class="col-md-6" >
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Thêm Chủ Đề Sản Phẩm</h3>
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
            <form action="admin/chude/themchude" method="post" nctype="multipart/form-data">
            	<input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="box-body">
              	<div class="form-group">
                  <label>Thương Hiệu</label>
                  <select class="form-control" name="idthuonghieu">
                  @foreach($thuonghieu as $th)
                    	<option value="{{$th->id_TH}}">{{$th->TenTH}}</option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label >Tên Chủ Đề</label>
                  <input type="admin/thuonghieu/themchude" class="form-control" id="" name="TenCD" placeholder="Nhập Tên Chủ Đề">
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