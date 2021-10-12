
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
            <h1 class="m-0"> Detail Data Ruangan</h1>
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
            <form action="{{ route('ruang.show',['id'=>$ruang->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="class box-body">
                  <table class="table table-bordered">
                    {{-- <tr>
                      <td>Gambar Ruang</td>
                      <td>:</td>
                      <td><img src="{{ url($ruang->images!=null?$ruang->images:'')}}" height="100" width="100" alt=""></td>
                      <td><img class="img-thumbnail" src="{{ asset($ruang->images) }}" width="150" alt=""></td>
                      <img src="{{asset ('adminlte/dist/img/avatar2.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                      <img src="{{asset ('adminlte/dist/img/logo_user.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    </tr> --}}

                    <tr>
                      <td>Gambar</td>
                      <td>:</td>
                      {{-- <td style="width: 50px">{{ $loop->iteration + $ruang->firstItem() - 1 }}</td> --}}
                      {{-- <td><img class="img-thumbnail" src="{{ asset($ruang->images) }}" width="150" alt=""></td> --}}
                      <td>
                        <a href="{{ asset('img/ruang').'/'.$ruang->images }}">
                            <img width="150px" height="150px" class="my-2 rounded-circle shadow "
                                src="{{ asset('/img/ruang').'/'.$ruang->images }}"
                                alt="">
                        </a>    
                      </td>
                    </tr>
                    
                    <tr>
                      <td>Nama Ruang</td>
                      <td>:</td>
                      <td>{{ $ruang->name }}</td>
                    </tr>
                    <tr>
                      <td>Kode Ruang</td>
                      <td>:</td>
                      <td>{{ $ruang->kode_ruang }}</td>
                    </tr>
                    <tr>
                      <td>Lokasi</td>
                      <td>:</td>
                      <td>{{ $ruang->lokasi }}</td>
                    </tr>
                    <tr>
                      <td>Luas</td>
                      <td>:</td>
                      <td>{{ $ruang->luas }}</td>
                    </tr>
                    <tr>
                      <td>Kapasitas</td>
                      <td>:</td>
                      <td>{{ $ruang->kapasitas }}</td>
                    </tr>
                    <tr>
                      <td>Status Ruang</td>
                      <td>:</td>
                      <td>{{ $ruang->status ==1?'Tersedia':'Tidak Tersedia' }}</td>
                    </tr>
                    <tr>
                      <td>Keterangan</td>
                      <td>:</td>
                      <td>{{ $ruang->keterangan }}</td>
                    </tr>
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
