
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
            <h1 class="m-0">Galeri Ruangan</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card card-success">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12 col-lg-6 col-xl-4">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="{{ asset('adminlte/dist/img/aula1.jpg') }}" alt="Dist Photo 1" height="300" width="100" >
                
              </div>
              <div>
                <h4><strong>GEDUNG PKM</strong></h4>
              </div>
            </div>
            
            <div class="col-md-12 col-lg-6 col-xl-4">
              <div class="card mb-2">
                <img class="card-img-top" src="{{ asset('adminlte/dist/img/aula2.jpeg') }}" alt="Dist Photo 2" height="300" width="100" >
                
              </div>
              <div>
                <h4><strong>GEDUNG AULA MESIN</strong></h4>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
              <div class="card mb-2">
                <img class="card-img-top" src="{{ asset('adminlte/dist/img/aula3.jpg') }}" alt="Dist Photo 3" height="300" width="100" >
                
              </div>
              <div>
                <h4><strong>GEDUNG AULA SIPIL</strong></h4>
              </div>
            </div>
          </div>
        </div>

        <div class="card-body">
            <div class="row">
              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2 bg-gradient-dark">
                  <img class="card-img-top" src="{{ asset('adminlte/dist/img/aula4.jpg') }}" alt="Dist Photo 1" height="300" width="100" >
                  
                </div>
                <div>
                  <h4><strong>GEDUNG AULA C</strong></h4>
                </div>
              </div>
              
              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="{{ asset('adminlte/dist/img/aula5.jpg') }}" alt="Dist Photo 2" height="300" width="100" >
                  
                </div>
                <div>
                  <h4><strong>GEDUNG AULA AC</strong></h4>
                </div>
              </div>
              <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2">
                  <img class="card-img-top" src="{{ asset('adminlte/dist/img/kelas3.jpg') }}" alt="Dist Photo 3" height="300" width="100" >
                  
                </div>
                <div>
                  <h4><strong>GEDUNG KELAS C</strong></h4>
                </div>
              </div>
            </div>
          </div>
        

        </div>
        
        <div class="card-body">
          <div class="row">
            <div class="col-md-12 col-lg-6 col-xl-4">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="{{ asset('adminlte/dist/img/kelas4.jpg') }}" alt="Dist Photo 1" height="300" width="100">
                
              </div>
              <div>
                <h4><strong>GEDUNG KELAS E</strong></h4>
              </div>
            </div>
            
            <div class="col-md-12 col-lg-6 col-xl-4">
              <div class="card mb-2">
                <img class="card-img-top" src="{{ asset('adminlte/dist/img/kelas6.jpg') }}" alt="Dist Photo 2" height="300" width="100">
                
              </div>
              <div>
                <h4><strong>GEDUNG KELAS F</strong></h4>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
              <div class="card mb-2">
                <img class="card-img-top" src="{{ asset('adminlte/dist/img/kelas7.jpg') }}" alt="Dist Photo 3" height="300" width="100">
                
              </div>
              <div>
                <h4><strong>GEDUNG KELAS B</strong></h4>
              </div>
            </div>
          </div>
        </div>
      
        <div class="card-body">
          <div class="row">
            <div class="col-md-12 col-lg-6 col-xl-4">
              <div class="card mb-2 bg-gradient-dark">
                <img class="card-img-top" src="{{ asset('adminlte/dist/img/kelas8.jpg') }}" alt="Dist Photo 1" height="300" width="100">
                
              </div>
              <div>
                <h4><strong>GEDUNG KELAS AB</strong></h4>
              </div>
            </div>
            
            <div class="col-md-12 col-lg-6 col-xl-4">
              <div class="card mb-2">
                <img class="card-img-top" src="{{ asset('adminlte/dist/img/kelas11.jpg') }}" alt="Dist Photo 2" height="300" width="100">
                
              </div>
              <div>
                <h4><strong>GEDUNG KELAS AC</strong></h4>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
              <div class="card mb-2">
                <img class="card-img-top" src="{{ asset('adminlte/dist/img/kelaspkm.jpg') }}" alt="Dist Photo 3" height="300" width="100">
                
              </div>
              <div>
                <h4><strong>GEDUNG KELAS PKM</strong></h4>
              </div>
            </div>
          </div>
        </div>
      

      </div>
      </div>

      
      

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
