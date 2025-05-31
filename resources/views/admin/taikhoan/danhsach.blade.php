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
              <button type="submit" value="Thêm" class="btn btn-light text-white" ><a href="admin/taikhoan/themadmin" >Thêm Admin</a></button>
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
                  <th>Tài Khoản</th>
                  <th>Họ Tên</th>
                  <th>Xem Chi Tiết</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                </tr>
                @foreach($admin as $ad)
                <tr>
                  <td>{{$ad->id_Ad}}</td>	
                  <td>{{$ad->Username}}</td>
                  <td>{{$ad->HoTen}}</td>
                  <td>
                    <a href="admin/taikhoan/xemadmin/{{$ad->id_Ad}}"><button class="btn btn-light text-white"><i class="fa  fa-tripadvisor"></i>Xem</button></a>
                  </td>
                  <td>
                    <a href="admin/taikhoan/suaadmin/{{$ad->id_Ad}}"><button type="submit" class="btn btn-light text-white"><i class="fa fa-wrench"></i>Sửa</button></a>
                  </td> 
                  <td>
                    <a href="admin/taikhoan/xoaadmin/{{$ad->id_Ad}}"><button type="submit" class="btn btn-light text-white"><i class="fa fa-trash"></i>Xóa</button></a>
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