@extends('layout.master')
@section('home')
<!-- đây là nội dung trang -->
<div class="container">
  <h2 class="text-danger">Chi Tiết Đơn Hàng</h2>
  <label id="tongtien">Tổng Tiền: {{$tongtien}}$</label>           
  <table class="table table-striped border">
    <thead>
      <tr>
        <th>STT</th>
        <th>Tên Sản Phẩm</th>
        <th>Ảnh Sản Phẩm</th>
        <th>Số Lượng</th>
        <th>Đơn Giá</th>
        <th>Thành Tiền</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($giohang as $gh)
      @foreach($sanpham as $sp)
      @if($sp->id_SP == $gh->id_SP)
      <tr>
        <td>1</td>
        <td>{{$sp->TenSP}}</td>
        <td><img src="images/{{$sp->ImgSP}}" width="100px;"></td>
        <td><button id="tru{{$sp->id_SP}}">-</button><input type="text" id="sl{{$sp->id_SP}}" name="slsp" value="{{$gh->SoLuong}}"><button id="cong{{$sp->id_SP}}">+</button></td>
        <td>{{$sp->GiaSP}}$</td>
        <td><input type="text" value="{{$gh->Gia}}" id="gia{{$sp->id_SP}}" disabled></td>
        <td>
        	<a href="xoahang{{$sp->id_SP}}"><button type="submit" class="btn btn-light text-white"><i class="fa fa-trash"></i>Xóa</button></a>
        </td>
      </tr>
      <script type="text/javascript">
        $('#tru{{$sp->id_SP}}').click(function(){
          var sl = $("#sl{{$sp->id_SP}}").val();
          $("#sl{{$sp->id_SP}}").val(sl-1);
          $.get('tru{{$sp->id_SP}}',function(data){
            $('#gia{{$sp->id_SP}}').val(data[0]);
            $('#tongtien').html('Tổng tiền: '+data[1]+'$');
             //alert(data[1]);
          });
        });
        $('#cong{{$sp->id_SP}}').click(function(){
          var sl = $("#sl{{$sp->id_SP}}").val();
          $("#sl{{$sp->id_SP}}").val(parseInt(sl)+1);
          $.get('cong{{$sp->id_SP}}',function(data){
            $('#gia{{$sp->id_SP}}').val(data[0]);
            $('#tongtien').html('Tổng tiền: '+data[1]+'$');
            // alert(data);
            
          });
        });
      </script>
      @endif
      @endforeach
      @endforeach
    </tbody>
    
  </table>
  <a href="shop"><button type="submit" class="btn btn-light text-white"><i class="fa fa-shopping-cart"></i>Tiếp Tục Muc Hàng</button></a>
  <a href="dathang"><button type="submit" class="btn btn-light text-white"><i class="fa fa-truck"></i>Đặt Hàng </button></a>
  <div class="clearfix"></div>
  <div class="container">
    <div class="col-md-12">
          
          <div class="box box-solid">
            
            <!-- /.box-header -->
            <div class="box-body">
              
              <dl class="dl-horizontal">
                <dt>Tên Khách Hàng</dt>
                <dd>{{session('TenKH')}}</dd>
                <dt>Email</dt>
                <dd>{{session('email')}}</dd>
                <dt>Điện Thoại</dt>
                <dd>{{session('dienthoai')}}</dd>
                <dt>Địa Chỉ</dt>
                <dd>{{session('diachi')}}</dd>
                <!-- <dt>Ngày Giao Hàng</dt>
                <dd>1224</dd> -->
                
              </dl>
              
            </div>
          </div>
        </div>

  </div>
</div>



@endsection