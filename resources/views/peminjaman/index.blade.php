{{-- <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peminjaman Gedung</title>
  
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css ') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css') }}">
    
  </head> --}}
  
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('template-user.head')
  <style>
    div.besar {
    line-height: 40px;
}
  </style>
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
          <div class="col-sm-6">
            <h1 class="m-0">Reservasi Ruangan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    {{-- gedung pkm --}}
  <div class="card card-success">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2 bg-gradient-dark">
            <img class="card-img-top" src="{{ asset('adminlte/dist/img/aula1.jpg') }}" alt="Dist Photo 1">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              
            </div>
          </div>
          
        </div>
        
        
        <div>
          <div>
            <h2><strong>AULA GEDUNG PKM</strong></h2>
          </div>
          <tr>
            <td><strong> LOKASI</strong> </td>
            <td> : </td>
            <td>Politeknik Negeri Padang</td>
          </tr>
          <div class="besar">
            <tr>
              <td><strong> KAPASITAS</strong> </td>
              <td> : </td>
              <td>800 Orang</td>
            </tr>
          </div>
          <div class="besar">
            <tr>
              <td><strong> DESKRIPSI</strong> </td>
              <td> : </td>
              <td>Gedung PKM ini biasa digunakan untuk acara kegiatan mahasiswa</td>
            </tr>
          </div>
          
          <div class="besar">
             Silahkan klik disini untuk melakukan peminjaman gedung
          </div>
          {{-- <div class=form-group>
            <button type="submit" class="btn btn-success">Booking</button>
          </div> --}}
          <div class="card-tools">
            <a href="{{ route('peminjaman.create') }}" class="btn btn-success">Booking </a>
        </div>
        </div>
        
      </div>
    </div>
  </div>
  
    {{-- aula mesin --}}
  <div class="card card-success">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2 bg-gradient-dark">
            <img class="card-img-top" src="{{ asset('adminlte/dist/img/aula2.jpeg') }}" alt="Dist Photo 1">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              
            </div>
          </div>
          
        </div>

        <div>
          <div>
            <h2><strong>AULA GEDUNG MESIN</strong></h2>
            {{-- @if
              $nama_ruang = Aula Gedung Mesin;
            @endif --}}
          </div>
          <tr>
            <td><strong> LOKASI</strong> </td>
            <td> : </td>
            <td>Politeknik Negeri Padang</td>
          </tr>
          <div class="besar">
            <tr>
              <td><strong> KAPASITAS</strong> </td>
              <td> : </td>
              <td>200 Orang</td>
            </tr>
          </div>
          <div class="besar">
            <tr>
              <td><strong> DESKRIPSI</strong> </td>
              <td> : </td>
              <td>Gedung Aula Mesin ini biasa digunakan untuk gedung Rapat</td>
            </tr>
          </div>
          
          <div class="besar">
             Silahkan klik disini untuk melakukan peminjaman gedung
          </div>
          <div class="card-tools">
            <a href="{{ route('peminjaman.create') }}" class="btn btn-success">Booking </a>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  {{-- aula sipil --}}
  <div class="card card-success">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2 bg-gradient-dark">
            <img class="card-img-top" src="{{ asset('adminlte/dist/img/aula3.jpg') }}" alt="Dist Photo 1">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              
            </div>
          </div>
          
        </div>

        <div>
          <div>
            <h2><strong>AULA GEDUNG SIPIL</strong></h2>
          </div>
          <tr>
            <td><strong> LOKASI</strong> </td>
            <td> : </td>
            <td>Politeknik Negeri Padang</td>
          </tr>
          <div class="besar">
            <tr>
              <td><strong> KAPASITAS</strong> </td>
              <td> : </td>
              <td>250 Orang</td>
            </tr>
          </div>
          <div class="besar">
            <tr>
              <td><strong> DESKRIPSI</strong> </td>
              <td> : </td>
              <td>Gedung Aula Sipil ini biasa digunakan untuk gedung Rapat</td>
            </tr>
          </div>
          
          <div class="besar">
             Silahkan klik disini untuk melakukan peminjaman gedung
          </div>
          <div class="card-tools">
            <a href="{{ route('peminjaman.create') }}" class="btn btn-success">Booking </a>
        </div>
        </div>
        
      </div>
    </div>
  </div>

  {{-- aula gedung c --}}
  <div class="card card-success">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2 bg-gradient-dark">
            <img class="card-img-top" src="{{ asset('adminlte/dist/img/aula4.jpg') }}" alt="Dist Photo 1">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              
            </div>
          </div>
          
        </div>

        <div>
          <div>
            <h2><strong>AULA GEDUNG C</strong></h2>
          </div>
          <tr>
            <td><strong> LOKASI</strong> </td>
            <td> : </td>
            <td>Politeknik Negeri Padang</td>
          </tr>
          <div class="besar">
            <tr>
              <td><strong> KAPASITAS</strong> </td>
              <td> : </td>
              <td>300 Orang</td>
            </tr>
          </div>
          <div class="besar">
            <tr>
              <td><strong> DESKRIPSI</strong> </td>
              <td> : </td>
              <td>Gedung C ini biasa digunakan untuk gedung Rapat</td>
            </tr>
          </div>
          
          <div class="besar">
             Silahkan klik disini untuk melakukan peminjaman gedung
          </div>
          <div class="card-tools">
            <a href="{{ route('peminjaman.create') }}" class="btn btn-success">Booking </a>
        </div>
        </div>
        
      </div>
    </div>
  </div>

  {{-- aula gedung AC --}}
  <div class="card card-success">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2 bg-gradient-dark">
            <img class="card-img-top" src="{{ asset('adminlte/dist/img/aula5.jpg') }}" alt="Dist Photo 1">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              
            </div>
          </div>
          
        </div>

        <div>
          <div>
            <h2><strong>AULA GEDUNG AC</strong></h2>
          </div>
          <tr>
            <td><strong> LOKASI</strong> </td>
            <td> : </td>
            <td>Politeknik Negeri Padang</td>
          </tr>
          <div class="besar">
            <tr>
              <td><strong> KAPASITAS</strong> </td>
              <td> : </td>
              <td>400 Orang</td>
            </tr>
          </div>
          <div class="besar">
            <tr>
              <td><strong> DESKRIPSI</strong> </td>
              <td> : </td>
              <td>Gedung AC ini biasa digunakan untuk gedung Rapat</td>
            </tr>
          </div>
          
          <div class="besar">
             Silahkan klik disini untuk melakukan peminjaman gedung
          </div>
          <div class="card-tools">
            <a href="{{ route('peminjaman.create') }}" class="btn btn-success">Booking </a>
        </div>
        </div>
        
      </div>
    </div>
  </div>

  {{-- KELAS C --}}
  <div class="card card-success">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2 bg-gradient-dark">
            <img class="card-img-top" src="{{ asset('adminlte/dist/img/kelas3.jpg') }}" alt="Dist Photo 1">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              
            </div>
          </div>
          
        </div>

        <div>
          <div>
            <h2><strong>GEDUNG KELAS C</strong></h2>
          </div>
          <tr>
            <td><strong> LOKASI</strong> </td>
            <td> : </td>
            <td>Politeknik Negeri Padang</td>
          </tr>
          <div class="besar">
            <tr>
              <td><strong> KAPASITAS</strong> </td>
              <td> : </td>
              <td>40 Orang</td>
            </tr>
          </div>
          <div class="besar">
            <tr>
              <td><strong> DESKRIPSI</strong> </td>
              <td> : </td>
              <td>Gedung Kelas C ini biasa digunakan untuk Kegiatan Belajar</td>
            </tr>
          </div>
          
          <div class="besar">
             Silahkan klik disini untuk melakukan peminjaman gedung
          </div>
          <div class="card-tools">
            <a href="{{ route('peminjaman.create') }}" class="btn btn-success">Booking </a>
        </div>
        </div>
        
      </div>
    </div>
  </div>

  {{-- kelas e --}}
  <div class="card card-success">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2 bg-gradient-dark">
            <img class="card-img-top" src="{{ asset('adminlte/dist/img/kelas4.jpg') }}" alt="Dist Photo 1">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              
            </div>
          </div>
          
        </div>

        <div>
          <div>
            <h2><strong>GEDUNG KELAS E</strong></h2>
          </div>
          <tr>
            <td><strong> LOKASI</strong> </td>
            <td> : </td>
            <td>Politeknik Negeri Padang</td>
          </tr>
          <div class="besar">
            <tr>
              <td><strong> KAPASITAS</strong> </td>
              <td> : </td>
              <td>60 Orang</td>
            </tr>
          </div>
          <div class="besar">
            <tr>
              <td><strong> DESKRIPSI</strong> </td>
              <td> : </td>
              <td>Gedung Kelas E ini biasa digunakan untuk Kegiatan Belajar</td>
            </tr>
          </div>
          
          <div class="besar">
             Silahkan klik disini untuk melakukan peminjaman gedung
          </div>
          <div class="card-tools">
            <a href="{{ route('peminjaman.create') }}" class="btn btn-success">Booking </a>
        </div>
        </div>
        
      </div>
    </div>
  </div>

  {{-- KELAS F --}}
  <div class="card card-success">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2 bg-gradient-dark">
            <img class="card-img-top" src="{{ asset('adminlte/dist/img/kelas6.jpg') }}" alt="Dist Photo 1">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              
            </div>
          </div>
          
        </div>

        <div>
          <div>
            <h2><strong>GEDUNG KELAS F</strong></h2>
          </div>
          <tr>
            <td><strong> LOKASI</strong> </td>
            <td> : </td>
            <td>Politeknik Negeri Padang</td>
          </tr>
          <div class="besar">
            <tr>
              <td><strong> KAPASITAS</strong> </td>
              <td> : </td>
              <td>80 Orang</td>
            </tr>
          </div>
          <div class="besar">
            <tr>
              <td><strong> DESKRIPSI</strong> </td>
              <td> : </td>
              <td>Gedung Kelas F ini biasa digunakan untuk Kegiatan Belajar</td>
            </tr>
          </div>
          
          <div class="besar">
             Silahkan klik disini untuk melakukan peminjaman gedung
          </div>
          <div class="card-tools">
            <a href="{{ route('peminjaman.create') }}" class="btn btn-success">Booking </a>
        </div>
        </div>
        
      </div>
    </div>
  </div>

  {{-- KELAS B --}}
  <div class="card card-success">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2 bg-gradient-dark">
            <img class="card-img-top" src="{{ asset('adminlte/dist/img/kelas7.jpg') }}" alt="Dist Photo 1">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              
            </div>
          </div>
          
        </div>

        <div>
          <div>
            <h2><strong>GEDUNG KELAS B</strong></h2>
          </div>
          <tr>
            <td><strong> LOKASI</strong> </td>
            <td> : </td>
            <td>Politeknik Negeri Padang</td>
          </tr>
          <div class="besar">
            <tr>
              <td><strong> KAPASITAS</strong> </td>
              <td> : </td>
              <td>90 Orang</td>
            </tr>
          </div>
          <div class="besar">
            <tr>
              <td><strong> DESKRIPSI</strong> </td>
              <td> : </td>
              <td>Gedung Kelas B ini biasa digunakan untuk Kegiatan Belajar</td>
            </tr>
          </div>
          
          <div class="besar">
             Silahkan klik disini untuk melakukan peminjaman gedung
          </div>
          <div class="card-tools">
            <a href="{{ route('peminjaman.create') }}" class="btn btn-success">Booking </a>
        </div>
        </div>
        
      </div>
    </div>
  </div>

  {{-- KELAS AB --}}
  <div class="card card-success">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2 bg-gradient-dark">
            <img class="card-img-top" src="{{ asset('adminlte/dist/img/kelas8.jpg') }}" alt="Dist Photo 1">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              
            </div>
          </div>
          
        </div>

        <div>
          <div>
            <h2><strong>GEDUNG KELAS AB</strong></h2>
          </div>
          <tr>
            <td><strong> LOKASI</strong> </td>
            <td> : </td>
            <td>Politeknik Negeri Padang</td>
          </tr>
          <div class="besar">
            <tr>
              <td><strong> KAPASITAS</strong> </td>
              <td> : </td>
              <td>100 Orang</td>
            </tr>
          </div>
          <div class="besar">
            <tr>
              <td><strong> DESKRIPSI</strong> </td>
              <td> : </td>
              <td>Gedung Kelas AB ini biasa digunakan untuk Kegiatan Belajar</td>
            </tr>
          </div>
          
          <div class="besar">
             Silahkan klik disini untuk melakukan peminjaman gedung
          </div>
          <div class="card-tools">
            <a href="{{ route('peminjaman.create') }}" class="btn btn-success">Booking </a>
        </div>
        </div>
        
      </div>
    </div>
  </div>

  {{-- KELAS AC --}}
  <div class="card card-success">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2 bg-gradient-dark">
            <img class="card-img-top" src="{{ asset('adminlte/dist/img/kelas11.jpg') }}" alt="Dist Photo 1">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              
            </div>
          </div>
          
        </div>

        <div>
          <div>
            <h2><strong>GEDUNG KELAS AC</strong></h2>
          </div>
          <tr>
            <td><strong> LOKASI</strong> </td>
            <td> : </td>
            <td>Politeknik Negeri Padang</td>
          </tr>
          <div class="besar">
            <tr>
              <td><strong> KAPASITAS</strong> </td>
              <td> : </td>
              <td>120 Orang</td>
            </tr>
          </div>
          <div class="besar">
            <tr>
              <td><strong> DESKRIPSI</strong> </td>
              <td> : </td>
              <td>Gedung Kelas AC ini biasa digunakan untuk Kegiatan Belajar</td>
            </tr>
          </div>
          
          <div class="besar">
             Silahkan klik disini untuk melakukan peminjaman gedung
          </div>
          <div class="card-tools">
            <a href="{{ route('peminjaman.create') }}" class="btn btn-success">Booking </a>
        </div>
        </div>
        
      </div>
    </div>
  </div>

  {{-- KELAS PKM --}}
  <div class="card card-success">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-4">
          <div class="card mb-2 bg-gradient-dark">
            <img class="card-img-top" src="{{ asset('adminlte/dist/img/kelaspkm.jpg') }}" alt="Dist Photo 1">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              
            </div>
          </div>
          
        </div>

        <div>
          <div>
            <h2><strong>GEDUNG KELAS PKM</strong></h2>
          </div>
          <tr>
            <td><strong> LOKASI</strong> </td>
            <td> : </td>
            <td>Politeknik Negeri Padang</td>
          </tr>
          <div class="besar">
            <tr>
              <td><strong> KAPASITAS</strong> </td>
              <td> : </td>
              <td>200 Orang</td>
            </tr>
          </div>
          <div class="besar">
            <tr>
              <td><strong> DESKRIPSI</strong> </td>
              <td> : </td>
              <td>Gedung Kelas PKM ini biasa digunakan untuk Kegiatan Belajar</td>
            </tr>
          </div>
          
          <div class="besar">
             Silahkan klik disini untuk melakukan peminjaman gedung
          </div>
          <div class="card-tools">
            <a href="{{ route('peminjaman.create') }}" class="btn btn-success">Booking </a>
        </div>
        </div>
        
      </div>
    </div>
  </div>
    <!-- Main content -->
    
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
    @include('template-user.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
    @include('template-user.script')

</body>
</html>


  