
@extends('Layout.admin')

@section('title')

<title>trang chủ </title>
@endsection

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partals.content_header',['name'=>'Máy tính', 'key'=>'sửa'])
    <!-- /.content-header -->

    <div class="content">
      <div class="container-fluid">
        <div class="row">
         <div class="col-6">
   <form action="{{route('Maytinh.update',['id'=>$maytinh->id])}}" method="Post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label >Tên tên máy tính</label>
       <input type="text" class="form-control"
        name ='tenmaytinh' value="{{$maytinh->tenmaytinh}}"
        placeholder=" nhập tên phòng máy">
   </div>
  @error('tenmaytinh')
     <div class=" alert alert-danger">{{$message}}</div>
   @enderror

  <div class="form-group">
      <label >CPU</label>
       <input type="text" class="form-control"
        name ='cpu' value="{{$maytinh->cpu}}"
        placeholder=" nhập loại cpu">
   </div>
  @error('cpu')
     <div class=" alert alert-danger">{{$message}}</div>
   @enderror
   
   <div class="form-group">
     <label >Ổ cứng</label>
      <input type="text" class="form-control"
       name ='ocung' value="{{$maytinh->ocung}}"
       placeholder=" nhập ổ cứng">
  </div>
 @error('ocung')
    <div class=" alert alert-danger">{{$message}}</div>
  @enderror
  
  
  <div class="form-group">
   <label >Ram</label>
    <input type="text" class="form-control"
     name ='ram' value="{{$maytinh->ram}}"
     placeholder=" nhập ram ">
</div>
@error('ram')
  <div class=" alert alert-danger">{{$message}}</div>
@enderror

<div class="form-group">
 <label >Mô Tả</label>
  <input type="text" class="form-control"
   name ='mota' value="{{$maytinh->mota}}"
   placeholder="viết mô tả ">
</div>
@error('mota')
<div class=" alert alert-danger">{{$message}}</div>
@enderror

<div class="form-group" >
<label > Máy tính</label>
<select class="form-control" name='ma_phongmay'>
@foreach ($selectphongmay as $value)
 <option value ={{$value['id']}} > {{$value['tenphongmay'] }}</option>
 @endforeach
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
 
      </script>
@endsection
