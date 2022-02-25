<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{asset ('adminlte/dist/img/logo_admin.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Administrator</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset ('adminlte/dist/img/logopoli.png') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div>
      <div class="info">
        <a href="#" class="d-block">Kasubbag Umum</a>
      </div>
      <div >
        <a href="#" class="d-block">Yuhedmi Noeva</a>
      </div>
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
          <a href="{{ route('dashboard_admin.index') }}" class="nav-link ">
            <i class="fas fa-tachometer-alt"></i>
            <p>
              Home  
            </p>
          </a>
        </li>

        {{-- <li class="nav-item menu-open">
          <a href="{{ route('jadwal_reservasi.index') }}" class="nav-link ">
            <i class="far fa-calendar-alt"></i>
            <p>
              Jadwal Reservasi 
            </p>
          </a>
        </li> --}}
        <li class="nav-item menu-open">
          <a href="{{ route('ruang.index') }}" class="nav-link ">
            <i class="fas fa-hotel"></i>
            <p>
              Data Ruangan
            </p>
          </a>
        </li>

        <li class="nav-item menu-open">
          <a href="{{ route('permohonan_reservasi.index') }}" class="nav-link ">
            <i class="fas fa-hotel"></i>
            <p>
              Permohonan Reservasi
            </p>
          </a>
        </li>

        {{-- <li class="nav-item menu-open">
          <a href="{{ route('konfirmasi.index') }}" class="nav-link ">
            <i class="fas fa-hotel"></i>
            <p>
              Jenis Status 
            </p>
          </a>
        </li> --}}

        {{-- <li class="nav-item menu-open">
          <a href="{{ route('konfirmasi_admin.index') }}" class="nav-link ">
            <i class="fas fa-hotel"></i>
            <p>
              Data Konfirmasi 
            </p>
          </a>
        </li> --}}

        <li class="nav-item menu-open">
          <a href="{{ route('konfirmasi.index') }}" class="nav-link ">
            <i class="fas fa-hotel"></i>
            <p>
              Konfirmasi
            </p>
          </a>
        </li>

        {{-- <li class="nav-item menu-open">
          <a href="{{ route('konfirmasi.index') }}" class="nav-link ">
            <i class="far fa-newspaper"></i>
            <p>
              Data Reservasi
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('konfirmasi.index') }}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Input Konfirmasi</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Accept</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pending</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Cancelled</p>
              </a>
            </li>
          </ul>
        </li> --}}

        {{-- <li class="nav-item menu-open">
          <a href="{{ route('register') }}" class="nav-link ">
            <i class="fas fa-users"></i>
            <p>
              Registrasi 
            </p>
          </a>
        </li> --}}

        <li class="nav-item menu-open">
          <a href="#" class="nav-link ">
            <i class="fas fa-users"></i>
            <p>
              Data User
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('user.index') }}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>All User</p>
              </a>
            </li>


            <li class="nav-item">
              <a href="{{ route('jurusan.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Jurusan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('ormawa.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data ORMAWA</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('unit.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Unit</p>
              </a>
            </li> 
          </ul>
        </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <i class="fas fa-chart-area"></i>
              <p>
                Kelola User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('group_user.index') }}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Group User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('role.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Role</p>
                </a>
              </li> 
            </ul>
          </li>

        <li class="nav-item menu-open">
          <a href="#" class="nav-link ">
            <i class="fas fa-chart-area"></i>
            <p>
              Data Laporan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('laporan_peminjaman.index') }}" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Laporan Peminjaman</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('laporan_peruang.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Laporan Per Ruangan</p>
              </a>
            </li> 
          </ul>
        </li>

        <li class="nav-item menu-open">
          <a href="{{ route('responden.index') }}" class="nav-link ">
            <i class="fas fa-user-check"></i>
            <p>
              Data Responden 
            </p>
          </a>
        </li>

        {{-- <li class="nav-item menu-open">
          <a href="{{ route('konfirmasi.index') }}" class="nav-link ">
            <i class="fas fa-user-check"></i>
            <p>
              Konfirmasi
            </p>
          </a>
        </li> --}}

        {{-- <li class="nav-item menu-open">
          <a href="#" class="nav-link ">
            <i class="fas fa-sign-out-alt"></i>
            <p>
              Logout
            </p>
          </a>
        </li> --}}
        {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form> --}}
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