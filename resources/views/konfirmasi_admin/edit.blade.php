
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
            <h1 class="m-0"> Input Surat Konfirmasi</h1>
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
          <form action="{{ route('konfirmasi_admin.update',['id'=>$user->id]) }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class=form-group>
                  <label for="name" class=" ">Nama User</label>
                  <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}">
                </div>
                <div class=form-group>
                  <label for="username" class=" ">Username</label>
                  <input type="text" id="username" name="username" class="form-control" value="{{ $user->username }}">
                </div>
                <div class=form-group>
                  <label for="email" class=" ">Email</label>
                  <input type="text" id="email" name="email" class="form-control" value="{{ $user->email }}">
                </div>
                {{-- <div class=form-group>
                  <label for="email" class=" ">Password</label>
                  <input type="text" id="password" name="password" class="form-control" value="{{ $user->password }}">
                </div> --}}
                <div class=form-group>
                  <label for="email" class=" ">Kontak</label>
                  <input type="text" id="kontak" name="kontak" class="form-control" value="{{ $user->kontak }}">
                </div>
                <div class=form-group>
                  <div>
                  <label for="status" class=" ">Status User</label>
                  </div>
                  <select name="status" class="form-control">
                    <option value="">---Pilih Status User---</option>
                    <option value="1" {!! $user->status == '1' ? 'selected':'' !!}>Accept</option> 
                    <option value="0" {!! $user->status == '0' ? 'selected':'' !!}>Cancel</option> 
                  </select>
                </div>
                <div class=form-group>
                    <label for="file" class=" ">Input Surat ACC Peminjaman</label>
                    <input type="file" id="file" name="file" class="form-control" placeholder="Masukkan Surat Peminjaman" value="{{ $user->file }}" >
                </div>
                {{-- <div>
                  <div>
                    <label for="name" class=" ">Role</label>
                    </div>
                    <select name="role_id" class=form-group>
                            <option value="">---Pilih Role---</option>
                            @foreach ($role as $val)
                                <option value="{{ $val ->id }}" {!! ($val->id==$role->role_id?"selected":"") !!} >{{ $val ->nama }}</option>
                            @endforeach
                    </select>
                </div>

                <div>
                  <div>
                    <label for="name" class=" ">Group User</label>
                    </div>
                    <select name="group_user_id" class=form-group>
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
