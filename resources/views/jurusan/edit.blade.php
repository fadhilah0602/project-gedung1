
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
            <h1 class="m-0"> Edit Data Jurusan</h1>
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
            <form action="{{ route('jurusan.update',['id'=>$jurusan->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class=form-group>
                    <label for="name" class=" ">Nama Jurusan</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ $jurusan->name }}">
                </div>
                <div class=form-group>
                  <label for="username" class=" ">Username</label>
                  <input type="text" id="username" name="username" class="form-control" value="{{ $jurusan->username }}">
                </div>
                <div class=form-group>
                  <label for="email" class=" ">Email</label>
                  <input type="text" id="email" name="email" class="form-control" value="{{ $jurusan->email }}">
                </div>

                <div class="form-group">
                  <label for="images">Logo Jurusan</label>
                  <input type="file" class="form-control logo @error('images') is-invalid @enderror" name="images" id="images" value="{{ old('images') }}" data-default-file="{{ asset('/img/ruang'.$jurusan->images) }}"  data-height="282">
                  @error('images')
                      <div class="text-danger small mt-1">{{ $message }}</div>
                  @enderror
                </div>
                <div class=form-group>
                  <label for="kajur" class=" ">Ketua Jurusan</label>
                  <input type="text" id="kajur" name="kajur" class="form-control" value="{{ $jurusan->kajur }}">
                </div>
                <div class=form-group>
                  <label for="kontak" class=" ">Kontak</label>
                  <input type="text" id="kontak" name="kontak" class="form-control" value="{{ $jurusan->kontak }}">
                </div>

                {{-- <div>
                  <select name="group_user_id" class="form-group">
                          <option value="">---Pilih Group User---</option>
                          @foreach ($group_user as $val)
                              <option value="{{ $val ->id }}" {!! ($val->id==$group_user->group_user_id?"selected":"") !!} >{{ $val ->nama_group }}</option>
                          @endforeach
                  </select>
                </div> --}}
                               
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
