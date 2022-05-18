@extends('Layout.admin')


@section('title')

<title>trang chủ </title>
@endsection

@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->   
    @include('partals.content_header',['name'=>'User', 'key'=>'List'])

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
       <div class="row">
          <div class="col-md-12">
            <a href="{{route('user.create')}}" class="btn btn-success float-right m-2"> Add</a>
          </div>
        </div>
      <div class="row">
        <div class="col-md-12">
            <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Tên</th>
              <th scope="col">email</th>
              <th scope="col">Ảnh</th>
              <th scope="col">giới tính</th>
              <th scope="col">số điện thoại </th>
              <th scope="col">Địa chỉ</th>
              <th scope="col">Nhóm</th>
              <th scope="col">Admin</th>
              <th scope="col">chức năng</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($usersv as $user)
            <tr>
              <th scope="row">{{$user->id}}</th>
              <td>  {{$user->Ten_user}} </td>
              <td>  {{$user->email}} </td>
              <td><img height ="100px" src="{{asset($user->avatar_path)}}" alt=""></td>
              <td>  {{$user->gioitinh}} </td>
              <td>  {{$user->sodienthoai}}  </td>
              <td>  {{$user->diachi}}   </td>
              <td> {{ optional($user->nhom)->tennhomkiemke}}   </td>

            @if($user->isadmin==true) {<td> Admin</td>}
            @else  {<td>Thành Viên</td>}
            @endif
              <td>
              <a href="{{route('user.edit',['id'=>$user->id])}}" class="btn btn-default">edit</a>
              <button onclick="handleDelete({{$user->id}},'users','delete')" class="btn btn-danger delete-btn">delete</button>
            </td>
            </tr>
           

           @endforeach
           
                   </tbody>
        </table>
      </div>
    </div>
        
      {{$usersv ->links('pagination::bootstrap-4') }}
       
        <!-- /.row -->
      </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  <!-- /.content-wrapper -->

  <script src="{{ asset('/assets/dist/js/handleDelete.js')}}"></script>

@endsection
