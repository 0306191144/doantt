
@extends('Layout.admin')

@section('title')

<title>trang chủ </title>
@endsection

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partals.content_header',['name'=>'User', 'key'=>'edit'])
    <!-- /.content-header -->

    <!-- Main content --> 
    <div class="content">
      <div class="container-fluid">
        <div class="row">
         <div class="col-6">

          <form action="{{route('user.update',['id'=>$user->id])}} " method="POST" enctype="multipart/form-data">
            <div class="form-group">
             
              <label >Họ Và Tên</label>
               <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$user->Ten_user}}"
                name ='name'
                placeholder=" Nhập họ và tên  ">
           </div>
          @error('name')
             <div class=" alert alert-danger">{{$message}}</div>
           @enderror
 
         <div class="form-group">
           <label >Email </label>
           <input type="text" class="form-control" 
            name ='email'
            value="{{$user->email}}"
            placeholder=" Enter email ">
         </div>
         @error('email')
           <div class=" alert alert-danger">{{$message}}</div>
         @enderror
 
         <div class="form-group" >
           <label >Giới Tính</label>
         <select class="form-control" name='gioitinh'>
           <option value="{{$user->gioitinh}}">{{$user->gioitinh}}</option>
           @if($user->gioitinh=='nữ') 
           <option value="nam">nam</option>
            @else
           <option value="nữ">nữ</option>
           @endif
         </select>
         </div>
 
         <div class="form-group">
            <label >Số điện thoại </label>
             <input type="text" class="form-control" 
                name ='phone' value="{{$user->sodienthoai}}"
              placeholder="  Nhập số điện thoại  ">
         </div>
         @error('phone')
         <div class=" alert alert-danger">{{$message}}</div>
          @enderror
 
         <div class="form-group">
           <label >Địa chỉ </label>
           <textarea type="text" class="form-control" 
            name ='adress'
            placeholder=" Nhập địa chỉ ">
            {{$user->diachi}}
           </textarea>
         </div>
         @error('adress')
           <div class=" alert alert-danger">{{$message}}</div>
         @enderror
 

         <div class="form-group">
           <label >Avatar </label>
           <input type="file" class="form-control-file" name='avatar' id="avatar"
           placeholder="  Enter user price ">
         </div>
         
         <div>
          <img height ="100px" src="{{asset($user->avatar_path)}}" alt="">
         </div>

           @error('avatar')
           <div class=" alert alert-danger">{{$message}}</div>
            @enderror
            
            <div class="col-3">
              <div class="row">
                  <div id="preview-avatar"></div>
               </div>
            </div>
     
            <div class="form-group" >
              <label >Nhóm</label>
            <select class="form-control" name='manhom'>
              {!! $htmlOption !!}
            </select>
            </div>

         <div class="row">
           <div class="col-8">
               <input type="checkbox" name='isadmin' id="isadmin" value="true">
               <label for="vehicle1">
                     Is admin
               </label>
           </div>
         </div>
 
        <button type="submit" class="btn btn-primary">Submit</button>
        @csrf
</form>
</div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script src="{{ asset('/assets/dist/js/previewImage.js')}}"></script>

  <script>
    previewImage("avatar","preview-avatar");
    previewImage("images","preview-images");
      </script>

@endsection
