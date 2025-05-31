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
              <h3 class="box-title">Sửa Chủ Đề Sản Phẩm</h3>
            </div>
            @if (count($errors) > 0)
                 <div class="alert alert-danger">
                     <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                     </ul>
                 </div>
            @endif
            @if(session('thongbao'))
              <div class="alert alert-danger">
                {{session('thongbao')}}
              </div>
            @endif
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('SuaChuDe')}}" method="post" nctype="multipart/form-data">
            	<input type="hidden" name="_token" value="{{csrf_token()}}">
              <input type="hidden" name="id_cd" value="{{$chude->id_CD}}">
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
                  <input type="" class="form-control" value="{{$chude->TenCD}}" id="" name="TenCD" placeholder="Nhập Tên Chủ Đề">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Sửa</button>
              </div>
            </form>
          </div>
         </div>
     </div>
    </section>
    <!-- /.content -->
@endsection