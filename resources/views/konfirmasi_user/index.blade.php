
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
            <h1 class="m-0">Info Konfirmasi</h1>
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
    {{-- <div class="content">
      <div class="card card-info card-outline"> 
        <div class="card-header">
        </div>
        <div class="card-body">
                @foreach ($user as $val)
                    @if($val->status==1)
                    Silahkan Download File ACC disini !!!
                    <div>
                        <a href="{{ asset('dokumen/').'/'.$val->file }}" 
                        alt="" target="_blank">Download
                        </a> 
                    </div>
                    @endif
                @endforeach
          </div>
        </div>
      </div>
    </div> --}}

    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
          <div class="card-tools">
            <a href="{{ route('konfirmasi.create') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered " id="table1">
            <tr>
              <th>No</th>
              <th>Nama Ruang</th>
              <th>Nama Kegiatan</th>
              <th>Nama Peminjam</th>
              <th>Tanggal Peminjaman</th>
              <th>Waktu</th>
              <th>Penanggung Jawab</th>
              <th>Status</th>
              <th>Bukti ACC</th>
              <th>Aksi</th>
            </tr>

            <tbody>
            <?php $no=1;?>
            @foreach ($konfirmasi as $val)
            <tr>
              <td>{{ $no }}</td>
              <td>{{ $val->ruang_id!=null?$val->ruang->name:"" }}</td>
              <td>{{ $val->peminjaman_id!=null?$val->peminjaman->nama_kegiatan:"" }}</td>
              <td>{{ $val->user_id!=null?$val->user->name:"" }}</td>
              <td>{{ $val->peminjaman_id!=null?$val->peminjaman->tanggal_mulai:"" }}</td>
              <td>{{ $val->peminjaman_id!=null?$val->peminjaman->waktu:"" }}</td>
              <td>{{ $val->peminjaman_id!=null?$val->peminjaman->pj:"" }}</td>
              <td>
                @if($val->status =='accept')
                  <button type="button" class="btn btn-success">{{ $val->status }}</button>
                  <a href="{{ route('konfirmasi.cetak') }}" target="_blank" class="btn btn-primary">Cetak <i class="fas fa-print"></i></a>
                @endif
                
                @if($val->status =='pending')
                  <button type="button" class="btn btn-warning">{{ $val->status }}</button>
                  <td></td>
                @endif
                @if($val->status =='cancel')
                  <button type="button" class="btn btn-danger">{{ $val->status }}</button>
                  <td></td>
                @endif
              </td>
              <td>
                <div>
                  
                  <a href="{{ route('konfirmasi.edit',['id'=>$val->id]) }}" class="btn btn-primary" ><i class="fas fa-edit"></i></a>
                  <a href="{{ route('konfirmasi.delete',['id'=>$val->id]) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                </div>
              </td>
              {{-- @if($val->status =='accept')
              <td><button type="button" class="btn btn-primary">Cetak</button></td>
              @endif  --}}
            </tr>
            <?php $no++ ;?>
            @endforeach
            </tbody>
          </table>

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
