<!-- Main Sidebar Container -->

 @php 
 $userauth = Auth::user();
 @endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href=" {{route('Admin.Home')}} " class="brand-link">
      <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Thongkephongmay</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        @if($userauth)
        <div class="image">
          <img src="{{$userauth->avatar_path}}" style="object-fit: cover; width:30px;height:30px" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{route('Admin.Home')}}" class="d-block">{{$userauth->name}}</a>
        </div>
      </div>
      @else
      <div class="image">
        <img src="" style="object-fit: cover; width:30px;height:30px" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="{{route('Admin.Home')}}" class="d-block">tran duc minh/a>
      </div>
    </div>
      @endif
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Thống kê
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
             Máy Tính
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('user.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
              <p>
                Thành Viên
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
              <p>
                Lớp Học
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
              <p>
               Lỗi
              </p>
            </a>
          </li> 

          <li class="nav-item">
            <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
              <p>
               Ca Học
              </p>
            </a>
          </li> 
           
          <li class="nav-item">
            <a href="{{route('Giaovien.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
              <p>
               Giáo viên
              </p>
            </a>
          </li> 


          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
                  <i class="nav-icon fas fa-times"></i>
              <p>
                Đăng xuất
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>