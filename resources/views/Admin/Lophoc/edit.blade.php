
@extends('Layout.admin')

@section('title')

<title>trang chủ </title>
@endsection

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partals.content_header',['name'=>'Lớp ', 'key'=>'sửa'])
    <!-- /.content-header -->

    <div class="content">
      <div class="container-fluid">
        <div class="row">
         <div class="col-6">
   <form action="{{route('Lophoc.update',['id'=>$lophoc->id])}}" method="Post" enctype="multipart/form-data">
    @csrf
          <div class="form-group">
             <label >Tên Lớp </label>
              <input type="text" class="form-control @error('tenlophoc') is-invalid @enderror" 
              value="{{$lophoc->ten_lophoc}}"
               name ='tenlophoc'
               placeholder=" nhập tên Lớp ">
          </div>
         @error('ten_lophoc')
            <div class=" alert alert-danger">{{$message}}</div>
          @enderror
          
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
 
      </script>
@endsection
