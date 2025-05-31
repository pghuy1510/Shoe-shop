@extends('admin.layout.index')
@section('content')
<a href="admin/sanpham/danhsachsanpham"><i class="fa  fa-arrow-circle-left"></i>   <strong>Trở Về</strong></a>

    <!-- Main content -->
    <section class="content-header">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Thêm Sản Phẩm</h3>
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
            <form action="{{route('ThemSanPham')}}" method="post" enctype="multipart/form-data">
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
                  <label>Chủ Đề</label>
                  <select class="form-control" name="idchude">
                    @foreach($chude as $cd)
                    <option value="{{$cd->id_CD}}">{{$cd->TenCD}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label >Tên Sản Phẩm</label>
                  <input type="" class="form-control" id="" placeholder=" Nhập Tên Sản Phẩm" name="tensp">
                </div>
                <div class="form-group">
                  <label >Giá Bán</label>
                  <input type="number" class="form-control" id="" placeholder=" Nhập Giá Bán" name="giaban">
                </div>
				<div class="form-group">
                  <label >Giá Sale</label>
                  <input type="number" class="form-control" id="" placeholder=" Nhập Giá Sale" name="giasale">
                </div>
                
                	<div class="box-body pad">
                    <label>Mô tả Sản Phẩm</label>
                    

                      <textarea name="mota" class="textarea" placeholder="Nhập Mô Tả Sản Phẩm"
                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  
                  </div>
            	
                <div class="form-group">
                  <label for="exampleInputFile">Chọn file sản phẩm</label>
                  <input type="file" id="exampleInputFile" name="myFile">
                  <p class="help-block">Example block-level help text here.</p>
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
@endsection