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
                  <th>Mã Đơn Hàng</th>
                  <th>Tên Khách Hàng</th>
                  <th>Tổng Tiền</th>
                  <th>Trạng Thái</th>
                  <th>Xem Chi Tiết</th>
                  <th>Xóa</th>
                </tr>
                @foreach($dondathang as $dh)
                <tr>
                  <td>{{$dh->id_Bill}}</td>	
                  @foreach($khachhang as $kh)
                  @if($dh->id_KH == $kh->id_KH)
                  <td>{{$kh->HoTenKH}}</td>
                  @endif
                  @endforeach
                  <td>{{$dh->TongTien}}</td>
                  @if($dh->TrangThai == 1)
                  <td>
                    <button class="btn btn-light text-white" style="background-color: #ffaaff">Đã Giao</button>
                  </td>
                  @else
                  <td>
                    
                    <button class="btn btn-light text-white" id="btngiaohang{{$dh->id_Bill}}">Chưa Giao</button>
                    <script type="text/javascript">
                      $("#btngiaohang{{$dh->id_Bill}}").click(function(){
                          $.get("giaohang/{{$dh->id_Bill}}", function(data){
                            alert(data);
                          });
                          //alert(1);
                      });
                      
                    </script>
                  </td>
                  @endif
                  <td>
                    <a href="admin/dondathang/xemdonhang{{$dh->id_Bill}}"><button class="btn btn-light text-white"><i class="fa  fa-tripadvisor"></i>Xem</button></a>
                  </td>
                  <td>
                    <a href=""><button type="submit" class="btn btn-light text-white"><i class="fa fa-trash"></i>Xóa</button></a>
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