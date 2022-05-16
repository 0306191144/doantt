
@extends('Layout.admin')

@section('title')

<title>trang chủ </title>
@endsection

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partals.content_header',['name'=>'Nhóm kiểm kê', 'key'=>'ADD'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
         <div class="col-6">
   <form action="{{route('Nhomkiemke.store')}}" method="Post" enctype="multipart/form-data">
    @csrf
          <div class="form-group">
             <label >Tên tên Nhóm kiểm kê</label>
              <input type="text" class="form-control @error('tennhomkiemke') is-invalid @enderror" value="{{old('tennhomkiemke')}}"
               name ='tennhomkiemke'
               placeholder=" nhập tên nhóm">
          </div>
         @error('tennhomkiemke')
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
    previewImage("avatar","preview-avatar");
    previewImage("images","preview-images");
  </script>


@endsection
