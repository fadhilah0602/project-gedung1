
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
            <h1 class="m-0">Data Konfirmasi</h1>
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
        </div>

        <div class="card-body">
          <table class="table table-bordered " id="table1">
            <tr>
              <th>No</th>
              <th>Nama User</th>
              <th>Email</th>
              <th>Status</th>
              <th>File ACC</th>
              <th>Aksi</th>
            </tr>

            <tbody>
            <?php $no=1;?>
            @foreach ($user as $val)
            <tr>
              <td>{{ $no }}</td>
              <td>{{ $val->name }}</td>
              <td>{{ $val->email }}</td>
              <td>{{ $val->status ==1?'Accept':'Cancel' }}</td>
              <td>

              @if($val->status ==1)
                <a href="{{ asset('dokumen/').'/'.$val->file }}" 
                   alt="" target="_blank">Download
                </a> 
              @endif
              </td>

              <td>
                <div>
                  <a href="{{ route('konfirmasi_admin.edit',['id'=>$val->id]) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
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