@extends('Layout.admin')


@section('title')

<title>trang chủ </title>
@endsection

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->   
    @include('partals.content_header',['name'=>'Nhóm kiểm kê', 'key'=>'List'])

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
       <div class="row">
          <div class="col-md-12">
            <a href="{{route('Nhomkiemke.create')}}" class="btn btn-success float-right m-2"> Add</a>
          </div>
      <div class="col-md-12">
            <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
       
            </tr>
          </thead>
          <tbody>
            @foreach ($nhomkiemkes as $nhomkiemke)
            <tr>
              <th scope="row">{{$nhomkiemke->id}}</th>
              <td>  {{$nhomkiemke->tennhomkiemke}} </td>
              <td>
              <a href="{{route('Nhomkiemke.edit',['id'=>$nhomkiemke->id])}}" class="btn btn-default">edit</a>
              <button onclick="handleDelete({{$nhomkiemke->id}},'nhomkiemke','delete')" class="btn btn-danger delete-btn">delete</button>
            </td>
            </tr>
            <tr>
            </tr>

           @endforeach
           
                   </tbody>
        </table>
      </div>
 
        
      {{$nhomkiemkes ->links('pagination::bootstrap-4') }}
     
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script src="{{ asset('/assets/dist/js/handleDelete.js')}}"></script>

@endsection
