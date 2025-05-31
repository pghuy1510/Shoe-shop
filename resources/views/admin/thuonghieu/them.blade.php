@extends('admin.layout.index')
@section('content')
<a href="admin/thuonghieu/danhsachthuonghieu"><i class="fa  fa-arrow-circle-left"></i>   <strong>Trở Về</strong></a>

    <!-- Main content -->
    <section class="content-header">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Thêm Thương Hiệu</h3>
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
            <form action="admin/thuonghieu/themthuonghieu" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="box-body">
                <div class="form-group">
                  <label >Tên Thương Hiệu</label>
                  <input type="" class="form-control" id="" name="TenTH" placeholder="Nhập Tên Thương Hiệu">
                </div>
                	<div class="box-body pad">
                    <label>Mô tả Thương Hiệu</label>
                      <textarea name="Mota" class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  
                  </div>
            	
                <div class="form-group">
                  <label for="exampleInputFile">Chọn Ảnh</label>
                  <input type="file" id="exampleInputFile" name="myFile">
                  <p class="help-block">Example block-level help text here.</p>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                
                <input type="submit" class="btn btn-primary" value="Thêm">
              </div>
            </form>
          </div>
         </div>
     </div>
    </section>
    <!-- /.content -->
@endsection