
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
          <div class="col-sm-6">
            <h1 class="m-0">Permohonan Peminjaman Ruangan </h1>
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
            <div class="col-sm-6" >
                <h4 class="m-0">Silahkan Kirim Pesan Kepada Admin</h4>
            </div>
        </div>
        
            <div class="col-lg-12">
            <div class="card card-primary card-outline">
                
                <div class="card-body">
                  <h4 class="card-title">1. Apabila Peminjam ingin re-schedule atau membatalkan reservasi harap konfirmasi terlebih dahulu kepada Admin Subbag Umum melalui kolom pesan yang tersedia</h4>
                  <h4 class="card-title">2. Diharapkan kepada peminjam untuk meninggalkan saran dan pendapat mengenai sarana dan prasarana yang tersedia untuk menjadi pertimbangan pihak kampus dalam meningkatkan dan memperbaiki fasilitas kampus</h4>
                  <h4 class="card-title">3. Apabila ada kerusakan pada sarana dan prasarana gedung maka akan menjadi tanggung jawab peminjam sepenuhnya</h4>
                </div>
            </div>
            </div>
          
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('responden_user.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    {{-- <div class=form-group>
                      <div>
                      <label for="status" >Opsi Peminjaman</label>
                      </div>
                      <select name="nama_ruang" class="form-control">
                        <option value="">---Pilih Opsi---</option>
                        <option value="1" {!! old('nama_ruang') == '1' ? 'selected':'' !!}>Re-Schedule</option> 
                        <option value="0" {!! old('nama_ruang') == '0' ? 'selected':'' !!}>Cancel</option> 
                      </select>
                  </div> --}}
                    {{-- <div class=form-group>
                        <label for="peminjaman_id" class=" ">Kode Peminjaman</label>
                        <input type="text" id="peminjaman_id" name="peminjaman_id" class="form-control" placeholder="Masukkan Kode Booking " >
                    </div> --}}

                    <div class="form-group">
                      <label for="peminjaman_id" >Pilih Ruangan</label>
                      <div>
                      <select name="peminjaman_id" class="form-control">
                              <option value="">---Pilih Tanggal Pelaksanaan---</option>
                              @foreach ($peminjaman as $val)
                                  <option value="{{ $val ->id }}">{{ $val ->tanggal_mulai }}</option>
                              @endforeach
                      </select>
                      </div>
                    </div>

                    <div class=form-group>
                        <label for="keterangan" class=" ">Pesan</label>
                        <input type="txt" name="pesan" id="pesan" class="form-control" placeholder="Masukkan Pesan">
                    </div>
                    <div class=form-group>
                        <button type="submit" class="btn btn-success">Kirim</button>
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
    @include('template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
    @include('template.script')

</body>
</html>
