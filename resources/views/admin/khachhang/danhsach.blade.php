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
              <button type="submit" value="Thêm" class="btn btn-light text-white" ><a href="admin/khachhang/themkhachhang" >Thêm Khách Hàng</a></button>
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
                  <th>ID_KH</th>
                  <th>Hộ Tên </th>
                  <th>Ngày Sinh</th>
                  <th>Email</th>
                  <th>Điện Thoại</th>   
                  <th>Địa Chỉ</th>
                  <th>Xem</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                </tr>
               @foreach($khachhang as $kh)
                <tr>
                  <td>{{$kh->id_KH}}</td>
                  <td>{{$kh->HoTenKH}}</td>
                  <td>{{$kh->NgaySinhKH}}</td>
                  <td>{{$kh->EmailKH}}</td>
                  <td>{{$kh->DienThoaiKH}}</td>
                  <td>{{$kh->DiaChiKH}}</td>
                  <td>
                    <a href="admin/khachhang/xemkhachhang/{{$kh->id_KH}}"><button class="btn btn-light text-white"><i class="fa  fa-tripadvisor"></i>Xem</button></a>
                  </td>
                  <td>
                    <a href=""><button type="submit" class="btn btn-light text-white"><i class="fa fa-wrench"></i>Sửa</button></a>
                  </td> 
                  <td>
                    <a href="admin/khachhang/xoakhachhang/{{$kh->id_KH}}"><button type="submit" class="btn btn-light text-white"><i class="fa fa-trash"></i>Xóa</button></a>
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