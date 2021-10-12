
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('template.sidebar')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0">Dashboard v2</h1> --}}
          </div><!-- /.col -->
          {{-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col --> --}}
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jurusan</span>
                <span class="info-box-number">{{ $jurusan }}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Ormawa</span>
                <span class="info-box-number">{{ $ormawa }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Unit</span>
                <span class="info-box-number">{{ $unit }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          {{-- <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total</span>
                <span class="info-box-number">2,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div> --}}

          {{-- <div class="content">
            <div class="card card-info card-outline">
              <div class="card-header">
                  <div class="card-tools">
                      <a href="{{ route('jurusan.create') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                  </div>
              </div>
      
              <div class="card-body">
                <table class="table table-bordered " id="table1">
                  <tr>
                    <th>No</th>
                    <th>Tanggal Pelaksanaan</th>
                    <th>Nama Peminjam</th>
                    <th>Nama Kegiatan</th>
                    <th>Status</th>
                  </tr>
      
                  <tbody>
                  <?php $no=1;?>
                  @foreach ($peminjaman as $val)
                  <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $val->tanggal_mulai }}</td>
                    <td>{{ $val->konfirmasi_id!=null?$val->nama_peminjam->name:"" }}</td>
                    <td>{{ $val->nama_kegiatan }}</td>
                    <td>{{ $val->peminjaman_id!=null?$val->konfirmasi->status:"" }}</td>
                  </tr>
                  <?php $no++ ;?>
                  @endforeach
                  </tbody>
                </table>
      
              </div>
            </div>
          </div>--}}

          <div class="content">
            <div class="card card-info card-outline">
              <div class="card-header">
              </div>
      
              <div class="card-body">
                <table class="table table-bordered " id="table1">
                  <tr>
                    <th>No</th>
                    <th>Nama Kegiatan</th>
                    <th>Nama Ruang</th>
                    <th>Tanggal Pelaksanaan</th>
                    <th>Penanggung Jawab</th>
                  </tr>
      
                  <tbody>
                  <?php $no=1;?>
                  @foreach ($peminjaman as $val)
                  <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $val->nama_kegiatan }}</td>
                    <td>{{ $val->nama_ruang }}</td>
                    <td>{{ $val->tanggal_mulai }}</td>
                    <td>{{ $val->pj }}</td>
                    {{-- <td>
                      <a href="{{ asset('dokumen/').'/'.$val->dokumen }}" 
                          alt="" target="_blank">Download
                      </a> 
                    </td> --}}
                    {{-- <td>
                      <div>
                        <a href="{{ route('jurusan.edit',['id'=>$val->id]) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('jurusan.show',['id'=>$val->id]) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('jurusan.delete',['id'=>$val->id]) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </td> --}}
                  </tr>
                  <?php $no++ ;?>
                  @endforeach
                  </tbody>
                </table>
      
              </div>
            </div>
          </div>
    
    <!-- Main content -->
    
    <!-- /.content -->
  </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        
        <!-- /.row -->

        <!-- Main row -->
        
        <!-- /.row -->
        
      </div><!--/. container-fluid -->
      
    </section>
    
    <!-- /.content -->
  </div>
  
  <!-- Content Wrapper. Contains page content -->
  
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
