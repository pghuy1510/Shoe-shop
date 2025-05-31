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
              <button type="submit" value="Thêm" class="btn btn-light text-white" ><a href="admin/thuonghieu/themthuonghieu" >Thêm Thương Hiệu</a></button>
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
                  <th>ID</th>
                  <th>Tên Thương Hiệu</th>
                  <th>Xem Chi Tiết</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                </tr>
                @foreach($thuonghieu as $th)
                <tr>
                  <td>{{$th->id_TH}}</td>
                  <td>{{$th->TenTH}}</td>
                  <td>
                    <a href="admin/thuonghieu/xemthuonghieu/{{$th->id_TH}}"><button class="btn btn-light text-white"><i class="fa  fa-tripadvisor"></i>Xem</button></a>
                  </td>
                  <td>
                    <a href="admin/thuonghieu/suathuonghieu/{{$th->id_TH}}"><button type="submit" class="btn btn-light text-white"><i class="fa fa-wrench"></i>Sửa</button></a>
                  </td> 
                  <td>
                    <a href="admin/thuonghieu/xoathuonghieu/{{$th->id_TH}}"><button type="submit" class="btn btn-light text-white"><i class="fa fa-trash"></i>Xóa</button></a>
                  </td>

                </tr> 
                @endforeach               
              </table>
             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
@endsection