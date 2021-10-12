
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
            <h1 class="m-0"> Edit Data Ruangan</h1>
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
            <form action="{{ route('ruang.update',['id'=>$ruang->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class=form-group>
                    <label for="name" class=" ">Nama Ruang</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ $ruang->name }}">
                </div>
                <div class=form-group>
                  <label for="kode_bagian" class=" ">Kode Ruang</label>
                  <input type="text" id="kode_ruang" name="kode_ruang" class="form-control" value="{{ $ruang->kode_ruang }}">
                </div>

                  <div class="form-group">
                      <label for="foto_ruang">Foto Ruang</label>
                      <input type="file" class="form-control logo @error('foto_ruang') is-invalid @enderror" name="foto_ruang" id="foto_ruang" value="{{ old('foto_ruang') }}" data-default-file="{{ asset('/img/ruang'.$ruang->images) }}"  data-height="282">
                      @error('foto_ruang')
                          <div class="text-danger small mt-1">{{ $message }}</div>
                      @enderror
                  </div>

                <div class=form-group>
                    <label for="images" class=" ">Lokasi</label>
                    <input type="text" id="lokasi" name="lokasi" class="form-control" value="{{ $ruang->lokasi }}">
                </div>
                <div class=form-group>
                  <label for="images" class=" ">Luas</label>
                  <input type="text" id="luas" name="luas" class="form-control" value="{{ $ruang->luas }}">
              </div>
                <div class=form-group>
                    <label for="images" class=" ">Kapasitas</label>
                    <input type="text" id="kapasitas" name="kapasitas" class="form-control" value="{{ $ruang->kapasitas }}">
                </div>
                <div class=form-group>
                  <div>
                  <label for="status" class=" ">Status Ruang</label>
                  </div>
                  <select name="status" class="form-control">
                    <option value="">---Pilih Status Ruang---</option>
                    <option value="1" {!! $ruang->status == '1' ? 'selected':'' !!}>Tersedia</option> 
                    <option value="0" {!! $ruang->status == '0' ? 'selected':'' !!}>Tidak Tersedia</option> 
                  </select>
                </div>
                <div class=form-group>
                  <label for="no_aset" class=" ">No Aset</label>
                  <input type="text" id="no_aset" name="no_aset" class="form-control" value="{{ $ruang->no_aset }}">
              </div>
                <div class=form-group>
                    <label for="images" class=" ">Keterangan</label>
                    <textarea type="text" id="keterangan" name="keterangan" class="form-control" >{{ $ruang->keterangan }}</textarea>
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
