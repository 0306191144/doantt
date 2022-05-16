
@extends('Layout.admin')

@section('title')

<title>trang chủ </title>
@endsection
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partals.content_header',['name'=>'CaHoc', 'key'=>'ADD'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
         <div class="col-6">
   <form action="{{route('Cahoc.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

          <div class="form-group">
             <label >Mã giáo viên </label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}"
               name ='name'
               placeholder="    ma_giaovien  ">
          </div>
         @error('name')
            <div class=" alert alert-danger">{{$message}}</div>
          @enderror

        <div class="form-group">
          <label >Mã lớp Học </label>
          <input type="text" class="form-control" 
           name ='email'
           placeholder=" Enter email ">
        </div>
        @error('email')
          <div class=" alert alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
          <label >Mã Phòng máy</label>
          <input type="text" class="form-control" 
           name ='password'
           placeholder="  Enter password ">
        </div>
        @error('password')
           <div class=" alert alert-danger">{{$message}}</div>
        @enderror

       <button type="submit" class="btn btn-primary">Gửi</button>
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
