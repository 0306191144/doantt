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
            <a href="{{route('Cahoc.create')}}" class="btn btn-success float-right m-2"> Add</a>
          </div>
      <div class="col-md-12">
            <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Tên</th>
              <th scope="col">Tên giáo viên</th>
              <th scope="col">Tên lớp học</th>
              <th scope="col">Tên phòng máy</th>
              <th scope="col">Tên nhóm trực </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($cahocs as $cahoc)
            <tr>
            
              <th scope="row">{{$cahoc->id}}</th>
              <td>{{ $cahoc->tencahoc}}</td>
               <td>  {{$cahoc->giaovien->ten_giaovien}} </td>
              <td>  {{optional($cahoc->Lophocv)->tenlophoc}} </td>
               <td>  {{optional($cahoc->maphongmaytinh)->tenphongmay}} </td>  
              <td>  {{optional($cahoc->user)->nhom->tennhomkiemke}} </td>
             <td> <a href="{{route('Cahoc.edit',['id'=>$cahoc->id])}}" class="btn btn-default">edit</a>
              <button onclick="handleDelete({{$cahoc->id}},'cahoc','delete')" class="btn btn-danger delete-btn">delete</button>
            </td>
            </tr>
            <tr>
            </tr>

           @endforeach
           
                   </tbody>
        </table>
      </div>
 
        
      {{$cahocs ->links('pagination::bootstrap-4') }}
     
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script src="{{ asset('/assets/dist/js/handleDelete.js')}}"></script>

@endsection
