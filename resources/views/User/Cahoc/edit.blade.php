
@extends('Layout.admin')

@section('title')

<title>trang chủ </title>
@endsection

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partals.content_header',['name'=>'Giáo viên', 'key'=>'edit'])
    <!-- /.content-header -->

    <div class="content">
      <div class="container-fluid">
        <div class="row">
         <div class="col-6">
   <form action="{{route('Cahoc.update',['id'=>$cahoc->id])}}" method="Post" enctype="multipart/form-data">
    @csrf
        
    <div class="form-group" >
      <label >tên ca học</label>
    <select class="form-control" name='tencahoc'>
      <option value='ca1'>ca1</option>
      <option value='ca2'>ca2</option>
      <option value='ca3'>ca3</option>
      <option value='ca4'>ca4</option>
    </select>
  </div>


  <div class="form-group" >
      <label >Giáo viên</label>
    <select class="form-control" name='ma_giaovien'>
      @foreach ($selectgiaovien as $value)
      <option value ={{$value['id']}} {{($value['id']==$cahoc->ma_giaovien) ? 'selected':''}} > {{$value['ten_giaovien'] }}</option>
      @endforeach
    </select>
  </div>


  <div class="form-group" >
    <label > phòng máy</label>
  <select class="form-control" name='ma_phongmay'>
    @foreach ($selectphongmay as $value)
      <option value ={{$value['id']}} {{($value['id']==$cahoc->ma_phongmay) ? 'selected':''}} > {{$value['tenphongmay'] }}</option>
      @endforeach
  </select>
</div>

<div class="form-group" >
  <label >Lớp học</label>
<select class="form-control" name='ma_lophoc'>
  @foreach ($selectlophoc as $value)
  <option value ={{$value['id']}} {{($value['id']==$cahoc->ma_lophoc) ? 'selected':''}} > {{$value['tenlophoc'] }}</option>
  @endforeach
</select>
</div>
  
<div class="form-group" >
  <label >Ngày học</label>
  <input type="date" name='ngayhoc' class="form-control" value='{{$cahoc->ngayhoc}}'>

</div>
@error('ngayhoc')
<div class=" alert alert-danger">{{$message}}</div>
@enderror

<div class="form-group" >
<label >ghi chú</label>
<input type="text" name='ghichu' class="form-control" value='{{$cahoc->ghi_chu}}' >

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
 
      </script>
@endsection
