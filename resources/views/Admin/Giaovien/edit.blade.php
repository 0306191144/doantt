
@extends('Layout.admin')

@section('title')

<title>trang chủ </title>
@endsection

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partals.content_header',['name'=>'Giáo viên', 'key'=>'Sửa'])
    <!-- /.content-header -->

    <div class="content">
      <div class="container-fluid">
        <div class="row">
         <div class="col-6">
   <form action="{{route('Giaovien.update',['id'=>$giaovien->id])}}" method="Post" enctype="multipart/form-data">
    @csrf
          <div class="form-group">
             <label >Tên Giáo viên</label>
              <input type="text" class="form-control @error('Ten_giaovien') is-invalid @enderror" 
              value="{{$giaovien->ten_giaovien}}"
               name ='Ten_giaovien'
               placeholder=" nhập tên giáo viên">
          </div>
         @error('Ten_giaovien')
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
