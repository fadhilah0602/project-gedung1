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
    {{-- <script>
        // var totalBelanja = prompt("Total belanja?", 0);

        // if(totalBelanja > 100000){
        //     document.write("<h2>Selamat Anda dapat hadiah</h2>");
        // }

        // document.write("<p>Terimakasih sudah berbelanja di toko kami</p>");
        var aula1,aula2;
        if(Image == 'aula1') {
            document.write("<h2>Selamat Anda dapat hadiah</h2>");
        }
        
    </script> --}}
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
              <h1 class="m-0">Input Reservasi Ruangan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
  
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
    {{-- <div class="card card-success ">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="card mb-2 bg-gradient-dark">   
              <img class="card-img-top" src="{{ asset('adminlte/dist/img/aula1.jpg') }}" alt="Dist Photo 1">
              <div class="card-img-overlay d-flex flex-column justify-content-end ">
                
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
          </div>
          
        </div>
      </div>
    </div> --}}
      <!-- Main content -->
      <div class="content">
        <div class="card card-info card-outline">
          
  
          <div class="card-body">
              <form action="{{ route('peminjaman.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class=form-group>
                      <label for="name" class=" ">Nama Kegiatan</label>
                      <input type="text" id="nama_kegiatan" name="nama_kegiatan" class="form-control" placeholder="Masukkan Nama Kegiatan" >
                  </div>
                  <div class=form-group>
                    <label for="name" class=" ">Nama Ruang</label>
                    <input type="text" id="nama_ruang" name="nama_ruang" class="form-control" placeholder="Masukkan Nama Ruang" >
                </div>
                  <div class=form-group>
                      <label for="images" class=" ">Tanggal Pelaksanaan</label>
                      <input type="date" id="tanggal_mulai" name="tanggal_mulai" class="form-control" placeholder="Masukkan Tanggal Pelaksanaan" >
                  </div>
                  <div class=form-group>
                    <label for="pembina" class=" ">Durasi</label>
                    <input type="text" id="durasi" name="durasi" class="form-control" placeholder="Masukkan Durasi " >
                </div>
                  <div class=form-group>
                      <label for="kontak_ormawa" class=" ">Waktu</label>
                      <input type="text" id="waktu" name="waktu" class="form-control" placeholder="Jam Mulai - Jam Selesai">
                  </div>
                  <div class=form-group>
                      <label for="email_ormawa" class=" ">Penanggung Jawab</label>
                      <input type="text" id="pj" name="pj" class="form-control" placeholder="Masukkan Penanggung Jawab">
                  </div>
                  <div class=form-group>
                    <label for="email_ormawa" class=" ">Kontak</label>
                    <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="Masukkan No HP/WhatsApp">
                  </div>
                  <div class=form-group>
                    <label for="dokumen" class=" ">Permohonan Surat Peminjaman</label>
                </div>
                <div>
                    <input type="file" id="dokumen" name="dokumen" class="form-control" >
                </div>
                  <div class=form-group>
                      <button type="submit" class="btn btn-success">Simpan</button>
                  </div>
              </form>
  
            
  
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
      @include('template-user.footer')
    </footer>
  </div>
  <!-- ./wrapper -->
  
  <!-- REQUIRED SCRIPTS -->
      @include('template-user.script')
  
  </body>
  </html>
  
  
    