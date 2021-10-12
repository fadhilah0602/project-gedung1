
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
            <h1 class="m-0">Data ORMAWA </h1>
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
            <div class="card-tools">
                <a href="{{ route('ormawa.create') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
            </div>
        </div>

        <div class="card-body">
          <table class="table table-bordered " id="table1">
            <tr>
              <th>No</th>
              <th>Nama ORMAWA</th>
              <th>Pembina</th>
              <th>Ketua Ormawa</th>
              <th>Kontak</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>

            <tbody>
            <?php $no=1;?>
            @foreach ($ormawa as $val)
            <tr>
              <td>{{ $no }}</td>
              <td>{{ $val->name }}</td>
              <td>{{ $val->pembina }}</td>
              <td>{{ $val->ketua }}</td>
              <td>{{ $val->kontak }}</td>
              <td>{{ $val->email }}</td>
              <td>
                <div>
                  <a href="{{ route('ormawa.edit',['id'=>$val->id]) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                  <a href="{{ route('ormawa.show',['id'=>$val->id]) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                  <a href="{{ route('ormawa.delete',['id'=>$val->id]) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                </div>
              </td>
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
    @include('template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
    @include('template.script')

</body>
</html>
