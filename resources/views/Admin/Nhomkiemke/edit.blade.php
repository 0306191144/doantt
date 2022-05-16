
@extends('Layout.admin')

@section('title')

<title>trang chủ </title>
@endsection

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partals.content_header',['name'=>'NHóm kiểm kê', 'key'=>'sửa'])
    <!-- /.content-header -->

    <div class="content">
      <div class="container-fluid">
        <div class="row">
         <div class="col-6">
   <form action="{{route('Nhomkiemke.update',['id'=>$nhomkiemke->id])}}" method="Post" enctype="multipart/form-data">
    @csrf
          <div class="form-group">
             <label >Tên Nhóm kiểm kê</label>
              <input type="text" class="form-control @error('ten_nhomkiemke') is-invalid @enderror" 
              value="{{$nhomkiemke->tennhomkiemke}}"
               name ='tennhomkiemke'
               placeholder=" nhập tên Nhóm kiểm kê">
          </div>
         @error('ten_nhomkiemke')
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
