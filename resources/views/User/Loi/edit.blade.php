
@extends('Layout.admin')

@section('title')

<title>trang chủ </title>
@endsection

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partals.content_header',['name'=>'Lỗi', 'key'=>'Sửa'])
    <!-- /.content-header -->

    <div class="content">
      <div class="container-fluid">
        <div class="row">
         <div class="col-6">
   <form action="{{route('Loi.update',['id'=>$loi->id])}}" method="Post" enctype="multipart/form-data">
    @csrf
        
    
    <div class="form-group" >
      <label >diễn tả Lỗi</label>
      <input type="text" name='dientaloi' class="form-control" value="{{$loi->dientaloi}}" >
    </div>

    <div class="form-group" >
      <label >Máy Tính</label>
    <select class="form-control" name='ma_maytinh'>
      @foreach ($selectmaytinh as $value)
        <option value ={{$value['id']}} {{ ($value['id']==$loi->ma_maytinh) ? 'selected':'' }}> {{$value['tenmaytinh'] }}</option>
        @endforeach
    </select>
  </div>

  <div class="form-group" >
    <label >trạng thái lỗi</label>
  <select class="form-control" name='trang_thai'>
    <option value='0'> đã fix</option>
    <option value='1'> chưa fix</option>
  </select>
</div>

  <div class="form-group" >
    <label >cahoc</label>
  <select class="form-control" name='ma_cahoc'>
    @foreach ($selectcahoc as $value)
    <option value ={{$value['id']}} {{($loi->macatruockhiloi==$value['id'])?'selected':''}} > {{$value['tencahoc'] }} {{$value['ngayhoc'] }}</option>
    @endforeach
  </select>
  </div>

  <div class="form-group" >
    <label >Ngày phát hiện lỗi </label>
    <input type="date" name='ngayphathienloi' class="form-control"  value="{{$loi->ngayphathienloi}}">
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
 
      </script>
@endsection
