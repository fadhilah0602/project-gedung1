
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
            <h1 class="m-0"> Input Data Unit</h1>
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
            <form action="{{ route('unit.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class=form-group>
                    <label for="name" class=" ">Nama Unit</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan Nama Unit" >
                </div>
                <div class=form-group>
                  <label for="name" class=" ">Kepala Unit</label>
                  <input type="text" id="kepala_unit" name="kepala_unit" class="form-control" placeholder="Masukkan Kepala Unit" >
                </div>
                <div class=form-group>
                  <label for="pembina" class=" ">Admin Unit</label>
                  <input type="text" id="admin_unit" name="admin_unit" class="form-control" placeholder="Masukkan Admin Unit" >
                </div>
                <div class=form-group>
                    <label for="kontak_ormawa" class=" ">Kontak</label>
                    <input type="text" id="kontak" name="kontak" class="form-control" placeholder="Masukkan Kontak">
                </div>
                <div class=form-group>
                    <label for="email_unit" class=" ">Email</label>
                    <input type="text" id="email" name="email" class="form-control" placeholder="Masukkan Email">
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
