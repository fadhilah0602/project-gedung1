
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('template-user.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template-user.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('template-user.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Selamat Datang di Sistem Informasi Peminjaman Gedung Polteknik Negeri Padang </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li> --}}
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
            {{-- <div class="card-tools">
                <a href="{{ route('jurusan.index') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
            </div> --}}
            {{-- <div class="col-sm-6" >
                <h4 class="m-0">Pemakaian Gedung</h4>
            </div> --}}
            
           
        </div>
        

        <div class="card-body">
          {{-- <table class="table table-bordered " id="table1">
            <tr>
              <th>No</th>
              <th>Nama Ruangan</th>
              <th>Nama Peminjam</th>
              <th>Jadwal Kegiatan</th>
              <th>Nama Kegiatan</th>
                
            </tr>

            <tbody>
            <?php $no=1;?>
            @foreach ($home as $val)
            <tr>
              <td>{{ $no }}</td>
              <td>{{ $val->name }}</td>
              <td>{{ $val->kajur }}</td>
              <td>{{ $val->kontak_jurusan }}</td>
              <td>{{ $val->email_jurusan }}</td>
              
            </tr>
            <?php $no++ ;?>
            @endforeach
            </tbody>
          </table> --}}

        </div>
        <div class="card-header">
            <div class="col-sm-6" >
                <h4 class="m-0">Standar Operasional Prosedur</h4>
            </div>
        </div>
        
            <div class="col-lg-8">
            <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="m-0">SOP PEMINJAMAN</h5>
                </div>
                <div class="card-body">
                  <h4 class="card-title">1. Reservasi gedung harus dilakukan minimal h-2 sebelum tanggal pemakaian gedung</h4>
                  <h4 class="card-title">2. Semua fasilitas gedung adalah tanggung jawab peminjam selama masa peminjaman</h4>
                  <h4 class="card-title">3. Peminjam yang ingin menggunakan gedung untuk kegiatan wajib mendapatkan izin kegiatan dari pihak akademik</h4>
                </div>
            </div>
            </div>

            <div class="card-body">
              <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-4">
                  <div class="card mb-2 bg-gradient-dark">
                    <img class="card-img-top" src="{{ asset('adminlte/dist/img/aula1.jpg') }}" alt="Dist Photo 1" height="300" width="100" >
                    
                  </div>
                  {{-- <div>
                    <h4><strong>GEDUNG PKM</strong></h4>
                  </div> --}}
                </div>
                
                <div class="col-md-12 col-lg-6 col-xl-4">
                  <div class="card mb-2">
                    <img class="card-img-top" src="{{ asset('adminlte/dist/img/aula2.jpeg') }}" alt="Dist Photo 2" height="300" width="100" >
                    
                  </div>
                  {{-- <div>
                    <h4><strong>GEDUNG AULA MESIN</strong></h4>
                  </div> --}}
                </div>
                <div class="col-md-12 col-lg-6 col-xl-4">
                  <div class="card mb-2">
                    <img class="card-img-top" src="{{ asset('adminlte/dist/img/aula3.jpg') }}" alt="Dist Photo 3" height="300" width="100" >
                    
                  </div>
                  {{-- <div>
                    <h4><strong>GEDUNG AULA SIPIL</strong></h4>
                  </div> --}}
                </div>
              </div>
            </div>
          
        </div>
      
    </div>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    @include('template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
    @include('template.script')

</body>
</html>
