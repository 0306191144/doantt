
@extends('Layout.admin')

@section('title')

<title>trang chủ </title>
@endsection

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partals.content_header',['name'=>'LỗiS', 'key'=>'thêm'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
         <div class="col-6">
   <form action="{{route('Loi.store')}}" method="Post" enctype="multipart/form-data">
    @csrf

    <div class="form-group" >
      <label >diễn tả Lỗi</label>
      <input type="text" name='dientaloi' class="form-control" >
    </div>

    <div class="form-group" >
      <label > may tinh</label>
    <select class="form-control" name='ma_maytinh'>
      @foreach ($selectmaytinh as $value)
        <option value ={{$value['id']}} > {{$value['tenmaytinh'] }}</option>
        @endforeach
    </select>
  </div>

  <div class="form-group" >
    <label > Ca học</label>
  <select class="form-control" name='ma_cahoc'>
    @foreach ($selectcahoc as $value)
    <option value ={{$value['id']}} > {{$value['tencahoc'] }} {{$value['ngayhoc'] }}</option>
    @endforeach
  </select>
  </div>

  <div class="form-group" >
    <label >Ngày phát hiện lỗi </label>
    <input type="date" name='ngayphathienloi' class="form-control" >
</div>
@error('ngayphathienloi')
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
