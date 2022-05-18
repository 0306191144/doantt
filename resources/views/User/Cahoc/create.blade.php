
@extends('Layout.admin')

@section('title')

<title>trang chủ </title>
@endsection

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partals.content_header',['name'=>'Cahoc', 'key'=>'ADD'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
         <div class="col-6">
   <form action="{{route('Cahoc.store')}}" method="Post" enctype="multipart/form-data">
    @csrf

    <div class="form-group" >
      <label >tên ca học</label>
    <select class="form-control" name='tencahoc'>
      <option value="ca1">Ca1</option>
      <option value="ca2">ca2</option>
      <option value="ca3">ca3</option>
      <option value="ca4">Ca4</option>
    </select>
    </div>


    <div class="form-group" >
        <label >Giáo viên</label>
      <select class="form-control" name='manhom'>
        {!! $htmlOption !!}
      </select>
    </div>


    <div class="form-group" >
      <label >Lophoc</label>
    <select class="form-control" name='lophoc'>
      {!! $htmlOption !!}
    </select>
  </div>

  <div class="form-group" >
    <label >Phòng hoc</label>
  <select class="form-control" name='lophoc'>
    {!! $htmlOption !!}
  </select>
  </div>
   
       <button type="submit" class="btn btn-primary">Submit</button>
       
    </form>
    </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
 </div>
  <!-- /.content-wrapper -->
  <script src="{{ asset('/assets/dist/js/previewImage.js')}}"></script>
  <script>
    previewImage("avatar","preview-avatar");
    previewImage("images","preview-images");
  </script>


@endsection
