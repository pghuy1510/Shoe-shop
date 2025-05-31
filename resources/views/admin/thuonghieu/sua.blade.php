@extends('admin.layout.index')
@section('content')
<a href="admin/thuonghieu/danhsachthuonghieu"><i class="fa  fa-arrow-circle-left"></i>  <strong> Trở Về</strong></a>
    <!-- Main content -->
    <section class="content-header">
      <div class="row">
        <!-- left column -->

        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Sửa Thương Hiệu:  <strong>{{$thuonghieu->TenTH}}</strong></h3>
            </div>
            @if(count($errors)>0)
              <div class="alert alert-danger">
                @foreach($errors->all() as $err)
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
            <form action="{{route('SuaThuongHieu')}}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input type="hidden" name="id_TH" value="{{$thuonghieu->id_TH}}">
              <input type="hidden" name="img" value="{{$thuonghieu->ImgTH}}">
              <div class="box-body">
                <div class="form-group">
                  <label >Tên Thương Hiêu</label>
                  <input type="text" name="TenTH" class="form-control" placeholder="Nhập tên thương hiệu" value="{{$thuonghieu->TenTH}}">
                </div>
                  <div class="box-body pad">
                    <label>Mô tả Sản Phẩm</label>
                    
                      <textarea name="mota" class="textarea" placeholder="Nhập mô tả về thương hiệu này"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" >{!!$thuonghieu->Description!!}</textarea>
                    
                  </div>
                <div class="form-group">
                  <label for="exampleInputFile">Chọn file ảnh thay thế</label>
                  <input type="file" id="exampleInputFile" name="myFile">
                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <img src="images/{{$thuonghieu->ImgTH}}" style="max-width: 200px;">
                <!-- <div class="form-group">
                  <label for="exampleInputPassword1">Ngày </label>
                  <input type="datetime-local" class="form-control" id="" placeholder="Ngày Đăng">
                </div> -->
                
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
@endsection