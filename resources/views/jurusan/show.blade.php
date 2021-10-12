
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
            <h1 class="m-0"> Detail Data Jurusan</h1>
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
            <form action="{{ route('jurusan.show',['id'=>$jurusan->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="class box-body">
                  <table class="table table-bordered">
                    <tr>
                      <td>Logo</td>
                      <td>:</td>
                      {{-- <td>{{ ($jurusan->images!=null?$jurusan->images:'')}}</td> --}}
                      <td>
                        <a href="{{ asset('img/ruang').'/'.$jurusan->images }}">
                            <img width="150px" height="150px" class="my-2 rounded-circle shadow "
                                src="{{ asset('/img/ruang').'/'.$jurusan->images }}"
                                alt="">
                        </a>    
                      </td>
                    </tr>
                    <tr>
                      <td>Nama Jurusan</td>
                      <td>:</td>
                      <td>{{ $jurusan->name }}</td>
                    </tr>
                    <tr>
                      <td>Ketua Jurusan</td>
                      <td>:</td>
                      <td>{{ $jurusan->kajur }}</td>
                    </tr>
                    <tr>
                      <td>Kontak</td>
                      <td>:</td>
                      <td>{{ $jurusan->kontak }}</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>:</td>
                      <td>{{ $jurusan->email }}</td>
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
