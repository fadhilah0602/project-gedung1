
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
    <div class="form-group">
        <p align="center"><h2>Laporan Data Peminjaman</h2></p>
        <table class="table table-bordered " id="table1">
          <tr>
            <th>No</th>
            <th>Nama Peminjam</th>
            <th>Nama Ruang</th>
            <th>Nama Kegiatan</th>
            <th>Tanggal Pelaksanaan</th>
            <th>Penanggung Jawab</th>
          </tr>

          <tbody>
          <?php $no=1;?>
          @foreach ($konfirmasi as $val)
          <tr>
            <td>{{ $no }}</td>
            <td>{{ $val->user_id!=null?$val->user->name:"" }}</td>
            <td>{{ $val->ruang_id!=null?$val->ruang->name:"" }}</td>
            <td>{{ $val->peminjaman_id!=null?$val->peminjaman->nama_kegiatan:"" }}</td>
            <td>{{ $val->peminjaman_id!=null?$val->peminjaman->tanggal_mulai:"" }}</td>
            <td>{{ $val->peminjaman_id!=null?$val->peminjaman->pj:"" }}</td>
            
          </tr>
          <?php $no++ ;?>
          @endforeach
          </tbody>
        </table>
    </div>

</body>
</html>
