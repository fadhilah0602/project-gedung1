
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
        <p align="center"><h2>Laporan Data Ruangan</h2></p>
        <table class="table table-bordered " id="table1" border="1px" style="width: 80%">
            <tr>
              <th>No</th>
              <th>Nama Ruang</th>
              <th>Kode Ruang</th>
              <th>Kapasitas</th>
              <th>Status</th>
            <tbody>
            <?php $no=1;?>
            @foreach ($ruang as $val)
            <tr>
              <td>{{ $no }}</td>
              <td>{{ $val->name }}</td>
              <td>{{ $val->kode_ruang }}</td>
              <td>{{ $val->kapasitas }}</td>
              <td>{{ $val->status ==1?'Tersedia':'Tidak Tersedia' }}</td>
            </tr>
            <?php $no++ ;?>
            @endforeach
            </tbody>
          </table>
    </div>

</body>
</html>
