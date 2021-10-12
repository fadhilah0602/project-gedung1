
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
            <h1 class="m-0"> Edit Data ORMAWA</h1>
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
            <form action="{{ route('ormawa.update',['id'=>$ormawa->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class=form-group>
                    <label for="name" class=" ">Nama ORMAWA </label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ $ormawa->name }}">
                </div>
                <div class=form-group>
                  <label for="username" class=" ">Username </label>
                  <input type="text" id="username" name="username" class="form-control" value="{{ $ormawa->username }}">
              </div>
              <div class=form-group>
                <label for="email" class=" ">Email</label>
                <input type="text" id="email" name="email" class="form-control" value="{{ $ormawa->email }}">
              </div>

              <div class="form-group">
                <label for="images">Logo Ormawa</label>
                <input type="file" class="form-control logo @error('images') is-invalid @enderror" name="images" id="images" value="{{ old('images') }}" data-default-file="{{ asset('/img/ruang'.$ormawa->images) }}"  data-height="282">
                @error('images')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
              </div>

                <div class=form-group>
                  <label for="pembina" class=" ">Pembina</label>
                  <input type="text" id="pembina" name="pembina" class="form-control" value="{{ $ormawa->pembina }}">
              </div>
              <div class=form-group>
                <label for="ketua" class=" ">Ketua ORMAWA</label>
                <input type="text" id="ketua" name="ketua" class="form-control" value="{{ $ormawa->ketua }}">
              </div>
                <div class=form-group>
                    <label for="kontak" class=" ">Kontak</label>
                    <input type="text" id="kontak" name="kontak" class="form-control" value="{{ $ormawa->kontak }}">
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
