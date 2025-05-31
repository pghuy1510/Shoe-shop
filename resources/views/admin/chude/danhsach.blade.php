@extends('admin.layout.index')
@section('content')
<section class="content-header">
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Responsive Hover Table</h3> -->
              <button type="submit" value="Thêm" class="btn btn-light text-white" ><a href="admin/chude/themchude" >Thêm Chủ Đề</a></button>
              @if(session('thongbao'))
              <div class="alert alert-danger">
                {{session('thongbao')}}
              </div>
              @endif
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Tên Chủ Đề</th>
                  <th>Tên Thương Hiệu</th>
                  <th>Sửa</th> 
                  <th>Xóa</th>   
                </tr>
                @foreach($chude as $cd)
                
                <tr >
                  <td>{{$cd->id_CD}}</td>
                  <td>{{$cd->TenCD}}</td>
                 
                  <td>@foreach($thuonghieu as $th)
                      @if($cd->id_TH == $th->id_TH)
                      {{$th->TenTH}}
                      @endif
                      @endforeach
                  </td>
                
                  <td c>
                    <a href="admin/chude/suachude/{{$cd->id_CD}}"><button type="submit" class="btn btn-light text-white"><i class="fa fa-wrench"></i>Sửa</button></a>
                  </td> 
                  <td>
                    <a href="admin/chude/xoachude/{{$cd->id_CD}}"><button type="submit" class="btn btn-light text-white"><i class="fa fa-trash"></i>Xóa</button></a>
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
@endsection