
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
            <h1 class="m-0"> Detail Data ORMAWA</h1>
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
            <form action="{{ route('ormawa.show',['id'=>$ormawa->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="class box-body">
                  <table class="table table-bordered">
                    <tr>
                      <td>Logo</td>
                      <td>:</td>
                      <td>
                      <a href="{{ asset('img/ruang').'/'.$ormawa->images }}">
                            <img width="150px" height="150px" class="my-2 rounded-circle shadow "
                                src="{{ asset('/img/ruang').'/'.$ormawa->images }}"
                                alt="">
                        </a>    
                        {{-- <a href="{{ asset('img/ruang').'/'.$ormawa->images }}">
                          <img width="150px" height="150px" class="my-2 rounded-circle shadow "
                              src="{{ asset('/img/ruang').'/'.$ormawa->images }}"
                              alt="" target="_blank">dowload
                      </a>  --}}
                      </td>
                    </tr>
                    <tr>
                      <td>Nama ORMAWA</td>
                      <td>:</td>
                      <td>{{ $ormawa->name }}</td>
                    </tr>
                    <tr>
                      <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td>{{ $ormawa->username }}</td>
                      </tr>
                      <tr>
                      <td>Pembina</td>
                      <td>:</td>
                      <td>{{ $ormawa->pembina }}</td>
                    </tr>
                    <tr>
                      <td>Ketua ORMAWA</td>
                      <td>:</td>
                      <td>{{ $ormawa->ketua }}</td>
                    </tr>
                    <tr>
                      <td>Kontak</td>
                      <td>:</td>
                      <td>{{ $ormawa->kontak }}</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>:</td>
                      <td>{{ $ormawa->email }}</td>
                    </tr>
                    <tr>
                  </table>
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
