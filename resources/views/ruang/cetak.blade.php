
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
      <div style="text-align: center;">
        <h5><b>Kementerian Riset, Teknologi, dan Pendidikan Tinggi</b></h5>
        <h5><b>POLITEKNIK NEGERI PADANG</b></h5>
        <h5><b>Kampus Politeknik Limau Manis, Padang</b></h5>
        <h5><b>laman : www.polinpdg.ac.id, email : pnp@polinpdg.ac.id, Telp (0751) 72590</b></h5>  
      </div>
        <table class="table table-bordered " id="table1" border="1px" style="width: 80% text-align: right;">
            <tr >
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

        {{-- <div style="text-align: right;">
            <h5><b>Kasubbag Umum</b></h5>
            <h5><b>Politeknik Negeri Padang</b></h5>
        </div>
        <div></div>
        <div style="text-align: right;">
            <h5><b>Yuhedmi Noeva, S.Sos,M.Pd</b></h5>
            <h5><b>19721215 200003 2 001</b></h5>    
        </div> --}}
    </div>

</body>
</html>
