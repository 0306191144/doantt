@extends('Layout.admin')


@section('title')

<title>trang chủ </title>
@endsection

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->   
    @include('partals.content_header',['name'=>'Máy Tính', 'key'=>'List'])

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
       <div class="row">
          <div class="col-md-12">
            <a href="{{route('Maytinh.create')}}" class="btn btn-success float-right m-2"> Add</a>
          </div>
      <div class="col-md-12">
            <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Cpu</th>
              <th scope="col">Ram</th>
              <th scope="col">ổ cứng</th>
              <th scope="col">mô tả</th>
              <th scope="col">phòng máy</th>
              <th scope="col">chức năng</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($maytinhs as $maytinh)
            <tr>
              <th scope="row">{{$maytinh->id}}</th>
              <th scope="row">{{$maytinh->tenmaytinh}}</th>
              <th scope="row">{{$maytinh->cpu}}</th>
              <th scope="row">{{$maytinh->ram}}</th>
              <th scope="row">{{$maytinh->ocung}}</th>
              <td>  {{$maytinh->mota}} </td>
              <td>  {{ optional( $maytinh->phongmay)->tenphongmay}} </td>

              <td>
              <a href="{{route('Maytinh.edit',['id'=>$maytinh->id])}}" class="btn btn-default">edit</a>
              <button onclick="handleDelete({{$maytinh->id}},'maytinh','delete')" class="btn btn-danger delete-btn">delete</button>
            </td>
            </tr>
            <tr>
            </tr>

           @endforeach
           
                   </tbody>
        </table>
      </div>
 
        
      {{$maytinhs ->links('pagination::bootstrap-4') }}
     
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script src="{{ asset('/assets/dist/js/handleDelete.js')}}"></script>

@endsection
