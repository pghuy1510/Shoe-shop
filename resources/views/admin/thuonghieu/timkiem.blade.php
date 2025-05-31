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
            <div class="box-body table-responsive no-padding">
              
              <table class="table table-hover">
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
                    <a href=""><button><i class="fa  fa-tripadvisor"></i>Xem</button></a>
                  </td>
                  <td>
                    <a href=""><button type="submit" class="btn btn-default"><i class="fa fa-wrenchSS"></i>Sửa</button></a>
                  </td> 
                  <td>
                    <button type="submit" class="btn btn-default"><i class="fa fa-trash"></i>Xóa</button>
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