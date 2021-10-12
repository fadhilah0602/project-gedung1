
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Edit Status Konfirmasi</h1>
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
        

        <div class="card-body">
            <form action="{{ route('konfirmasi.update',['id'=>$konfirmasi->id]) }}" method="post" enctype="multipart/form-data">
                @csrf

              <div class=form-group>
                  <label for="status" class=" ">Nama Ruang</label>
                  <div class=form-group>
                  <select name="ruang_id" class="form-control">
                          <option value="">---Pilih Ruang---</option>
                          @foreach ($ruang as $val)
                              <option value="{{ $val ->id }}" {!! ($val->id==$konfirmasi->ruang_id?"selected":"") !!} >{{ $val ->name }}</option>
                          @endforeach
                  </select>
                  </div>
              </div>
              <div>
                  <label for="status" class=" ">Nama Kegiatan</label>
                  <div class=form-group>
                  <select name="peminjaman_id" class="form-control">
                          <option value="">---Pilih Kegiatan---</option>
                          @foreach ($peminjaman as $val)
                              <option value="{{ $val ->id }}" {!! ($val->id==$konfirmasi->peminjaman_id?"selected":"") !!} >{{ $val ->nama_kegiatan }}</option>
                          @endforeach
                  </select>
                  </div>
              </div>

              <div>
                  <label for="status" class=" ">Nama Peminjam</label>
                  <div class=form-group>
                <select name="user_id" class="form-control">
                        <option value="">---Pilih User---</option>
                        @foreach ($user as $val)
                            <option value="{{ $val ->id }}" {!! ($val->id==$konfirmasi->user_id?"selected":"") !!} >{{ $val ->name }}</option>
                        @endforeach
                </select>
                  </div>
            </div>
                
                <div class=form-group>
                    <label for="status" class=" ">Nama Status</label>
                    <input type="text" id="status" name="status" class="form-control" value="{{ $konfirmasi->status }}">
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
    @include('template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
    @include('template.script')

</body>
</html>
