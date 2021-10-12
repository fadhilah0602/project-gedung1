
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
            <h1 class="m-0">Registrasi Account </h1>
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
          {{-- <form method="GET" action="{{ route('login') }}" enctype="multipart/form-data"> --}}
            
            <form action="{{ route('user.index') }}" method="get" enctype="multipart/form-data">
                @csrf
                <div class=form-group>
                    <label for="name" class=" ">Nama User</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan Nama User" >
                </div>
                <div class=form-group>
                  <label for="email" class=" ">Email</label>
                  <input type="text" id="email" name="email" class="form-control" placeholder="Masukkan Email" >
              </div>
              <div class=form-group>
                <label for="username" class=" ">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan Username">
              </div>
                {{-- <input type="text" id="password" name="password" class="form-control" placeholder="Masukkan Password" > --}}

                <div class="form-group "> 
                  

                  <div class="group">
                    <label for="password" class=" ">Password</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                </div> 

                {{-- <div class=form-group>
                  <label for="username" class=" ">Password</label>
                  <input type="text" id="password" name="password" class="form-control" placeholder="Masukkan Password">
                </div> --}}

                {{-- <label for="password" class=" ">Password</label> --}}
                {{-- <div class="form-group row">
                  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                  <div class="col-md-6">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
              </div> --}}

                <div class=form-group>
                    <label for="kontak" class=" ">Kontak</label>
                    <input type="text" id="kontak" name="kontak" class="form-control" placeholder="Masukkan No HP/WhatApp">
                </div>
                <div class=form-group>
                  <div>
                  <label for="status" >Status User</label>
                  </div>
                  <select name="status" class="form-control">
                    <option value="">---Pilih Status User---</option>
                    <option value="1" {!! old('status') == '1' ? 'selected':'' !!}>Aktif</option>
                    <option value="0" {!! old('status') == '0' ? 'selected':'' !!}>Tidak Aktif</option>   
                  </select>
              </div>
                <div class=form-group>
                    <label for="file" class=" ">Input Surat ACC Peminjaman</label>
                    <input type="file" id="file" name="file" class="form-control" placeholder="Masukkan Surat Peminjaman"  >
                </div>

                <div class="form-group">
                  <label for="role_id" >Role</label>
                  <div>
                  <select name="role_id" class="form-control">
                          <option value="">---Pilih Role---</option>
                          @foreach ($role as $val)
                              <option value="{{ $val ->id }}">{{ $val ->nama }}</option>
                          @endforeach
                  </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="group_user_id" >Group User</label>
                  <div>
                  <select name="group_user_id" class="form-control">
                          <option value="">---Pilih Group User---</option>
                          @foreach ($group_user as $val)
                              <option value="{{ $val ->id }}">{{ $val ->nama_group }}</option>
                          @endforeach
                  </select>
                  </div>
                </div>

                {{-- <div>
                  <select name="peminjaman_id" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                          <option value="">---Pilih Status---</option>
                          @foreach ($konfirmasi as $val)
                              <option value="{{ $val ->id }}" {!! ($val->id==$peminjaman->peminjaman_id?"selected":"") !!} >{{ $val ->status }}</option>
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
