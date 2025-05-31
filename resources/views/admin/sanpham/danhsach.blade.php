@extends('admin.layout.index')
@section('content')
<!-- Main content -->
    <section class="content-header">
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Responsive Hover Table</h3> -->
              <button type="submit" value="Thêm" class="btn btn-light text-white" ><a href="admin/sanpham/themsanpham" >Thêm Sản Phẩm</a></button>
              @if(session('thongbao'))
              <div class="alert alert-danger">
                {{session('thongbao')}}
              </div>
              @endif
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  
                  <input type="text" name="tukhoa" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit"  class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                  

                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body ">
              
              <table id="example1" class="table table-bordered table-striped">
                <tr>
                  <th>ID_SP</th>
                  <th>Tên Thương Hiệu</th>
                  <th>Tên Chủ Đề</th>
                  <th>Tên Sản Phẩm</th>
                  <th>Giá Bán</th>
                  <th>Giá Sale</th>   
                  <th>Ảnh SP</th>
                  <th>Xem</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                </tr>
               @foreach($sanpham as $sp)
                <tr>
                  <td>{{$sp->id_SP}}</td>
                  <td>
                    @foreach($thuonghieu as $th)
                    @if($sp->id_TH == $th->id_TH)
                      {{$th->TenTH}}
                      @endif
                    @endforeach
                  </td>
                  <td>
                    @foreach($chude as $cd)
                    @if($sp->id_CD == $cd->id_CD)
                      {{$cd->TenCD}}
                      @endif
                    @endforeach
                  </td>
                  <td>{{$sp->TenSP}}</td>
                  <td>{{$sp->GiaSP}}</td>
                  <td>{{$sp->GiaSale}}</td>
                  <td>
                    <img src="images/{{$sp->ImgSP}}" width="30%">
                  </td>
                  
                  <td>
                    <a href="admin/sanpham/xemsanpham/{{$sp->id_SP}}"><button class="btn btn-light text-white"><i class="fa  fa-tripadvisor"></i>Xem</button></a>
                  </td>
                  <td>
                    <a href="admin/sanpham/suasanpham/{{$sp->id_SP}}"><button type="submit" class="btn btn-light text-white"><i class="fa fa-wrench"></i>Sửa</button></a>
                  </td> 
                  <td>
                    <a href="admin/sanpham/xoasanpham/{{$sp->id_SP}}"><button type="submit" class="btn btn-light text-white"><i class="fa fa-trash"></i>Xóa</button></a>
                  </td>

                </tr> 
                @endforeach
                               
              </table>
             {{$sanpham->links()}}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
@endsection