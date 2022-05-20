@extends('Layout.admin')


@section('title')

<title>trang chủ </title>
@endsection

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->   
    @include('partals.content_header',['name'=>'User', 'key'=>'List'])

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
       <div class="row">
          <div class="col-md-12">
            <a href="{{route('Loi.create')}}" class="btn btn-success float-right m-2"> Add</a>
          </div>
      <div class="col-md-12">
            <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Tên máy</th>
              <th scope="col">Tên ca gây ra</th>
              <th scope="col">mô tả lỗi</th>
              <th scope="col">trạng thái lỗi</th>
              <th scope="col">Ngàyphát hiện lỗi</th>
              <th scope="col">chức năng</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($lois as $loi)
            <tr>
              <th scope="row">{{$loi->id}}</th>
              <td>  {{optional( $loi->maytinh)->tenmaytinh}} </td>
              <td>  {{optional( $loi->ca)->tencahoc}} </td>
              <td>{{ $loi->dientaloi}}</td>
               <td> 
                {{ ($loi->trang_thai==1)? 'chưa fix': 'đã fix'}}
                 </td>  
                 <td>  {{$loi->ngayphathienloi}} </td>
             <td> <a href="{{route('Loi.edit',['id'=>$loi->id])}}" class="btn btn-default">edit</a>
              <button onclick="handleDelete({{$loi->id}},'loi','delete')" class="btn btn-danger delete-btn">delete</button>
            </td>
            </tr>
            <tr>
            </tr>

           @endforeach
           
                   </tbody>
        </table>
      </div>
 
        
      {{$lois ->links('pagination::bootstrap-4') }}
     
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script src="{{ asset('/assets/dist/js/handleDelete.js')}}"></script>

@endsection
