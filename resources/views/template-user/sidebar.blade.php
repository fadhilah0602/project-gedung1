<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  {{-- <a href="index3.html" class="brand-link">
    <img src="{{asset ('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Peminjaman Gedung</span>
  </a> --}}

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset ('adminlte/dist/img/user1.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">User</a>
      </div>
    </div>

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
 
        <li class="nav-item menu-open">
          <a href="{{ route('home_user.index') }}" class="nav-link ">
            <i class="fas fa-home"></i>
            <p>
              Home  
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="{{ route('peminjaman.index') }}" class="nav-link ">
            <i class="far fa-calendar-alt"></i>
            <p>
              Reservasi Ruangan
            </p>
          </a>
        </li>
        <li class="nav-item menu-open">
          <a href="{{ route('list_reservasi.index') }} " class="nav-link ">
            <i class="fas fa-images"></i>
            <p>
              List Reservasi
            </p>
          </a>
        </li>

        <li class="nav-item menu-open">
          {{-- <a href="{{ route('list_reservasi.index') }}" class="nav-link ">
            <i class="fas fa-table"></i>
            <p>
              List Reservasi
              
            </p>
          </a> --}}
          {{-- <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Pending</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Confirm</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Cancelled</p>
              </a>
            </li>
          </ul> --}}
        </li>
        <li class="nav-item menu-open">
          <a href="{{ route('responden_user.create') }}" class="nav-link ">
            <i class="fas fa-user-check"></i>
            <p>
              Responden
              
            </p>
          </a>
        </li>

        <li class="nav-item menu-open">
          <a href="{{ route('konfirmasi_user.index') }}" class="nav-link ">
            <i class="fas fa-user-check"></i>
            <p>
              Info Konfirmasi
              
            </p>
          </a>
        </li>
    

        <li class="nav-item menu-open">
          {{-- <a href="{{ route('profile.index') }}" class="nav-link ">
            <i class="fas fa-id-card"></i>
            <p>
              Profile
              
            </p>
          </a> --}}
          {{-- <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Edit Profile</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Edit Password</p>
              </a>
            </li> 
          </ul> --}}
        </li>
        
        
        {{-- <li class="nav-item menu-open">
          <a href="#" class="nav-link ">
            <i class="fas fa-sign-out-alt"></i>
            <p>
              Logout
            </p>
          </a>
        </li> --}}

        <li class="nav-item">
          <form action="{{ route('logout') }}" method="post" id="logout">
          @csrf
            <a class="nav-link" href="#" onclick="document.getElementById('logout').submit()">
                <i class="nav-icon fas fa-sign-out-alt"></i> Logout
            </a>
          </form>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
  
</aside>