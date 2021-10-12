<div class="card-body">

        <div style="text-align: center;">
            <h5><b>KELAS SANTRI TAHFIZH</b></h5>
            <h5><b>RUMAH TAHFIZH SHOHIBUL QURAN</b></h5>
            <h5><b>KELAS SANTRI TAHFIZH</b></h5>
            <h5><b>Koto tinggi pandaisikek kec. X koto Kabupaten Tanah Datar Sumbar</b></h5>
            <h5><b>TAHUN AJARAN <?= $y ?> BULAN <?= strtoupper($b[0]) ?></b></h5>
        </div>
        {{-- <div class="col">
            <p>Pembimbing : <?= $pengajar ?></p>
            <p>Kelas : <?= $k ?></p>
        </div> --}}
        {{-- <table class="table table-bordered">
            <tr style="text-align: center;">
                <th>No.</th>
                <th>Nama Santri</th>
                <th>Usia</th>
                <th>JK</th>
                <th>Alamat</th>
                <th>No. HP Ayah</th>
                <th>No. HP Ibu</th>
                <th>Jumlah Hafalan</th>
            </tr>
            <?php $no = 1;
            foreach ($santri as $s) { ?>
                <tr>
                    <td style="text-align: center;"><?= $no ?></td>
                    <td><?= $s['nama'] ?></td>
                    <td><?php if ($s['tgl_lahir'] != NULL) {
                            echo (date('Y') - $s['tgl_lahir']) . ' tahun';
                        } ?></td>
                    <td><?= $s['jk'] ?></td>
                    <td><?= $s['alamat'] ?></td>
                    <td><?= $s['nohp_ortu'] ?></td>
                    <td><?= $s['nohp_ortu'] ?></td>
                    <td><?php if ($s['jml_hafalan'] != NULL) {
                            echo $s['jml_hafalan'] . ' juz';
                        } ?></td>
                </tr>
            <?php $no++;
            } ?>
        </table> --}}