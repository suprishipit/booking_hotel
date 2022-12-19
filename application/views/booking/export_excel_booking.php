<?php
header("content-type: application/vnd-ms-excel");
header("content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<h3>
    <center>Laporan Data Bookingan</center>
</h3>
<br />
<table class="table-data">
    <thead>
        <tr>
            <th>no.</th>
            <th>id boking</th>
            <th>email</th>
            <th>no hp</th>
            <th>nama custamer</th>
            <th>tanggal masuk</th>
            <th>tanggal keluar</th>
            <th>jenis kamar</th>
            <th>jumlah vip</th>
            <th>jumlah reguler</th>
            <th>jumlah family</th>
            <th>harga</th>
            <th>total</th>
            <th>bukti</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($boking as $b) {

        ?>
            <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $b['id_boking']; ?></td>
                <td><?= $b['email']; ?></td>
                <td><?= $b['no_hp']; ?></td>
                <td><?= $b['nama_user']; ?></td>
                <td><?= $b['tanggal_masuk']; ?></td>
                <td><?= $b['tanggal_keluar']; ?></td>
                <td><?= $b['jenis_kamar']; ?></td>
                <td><?= $b['jumlah_vip']; ?></td>
                <td><?= $b['jumlah_reguler']; ?></td>
                <td><?= $b['jumlah_family']; ?></td>
                <td><?= $b['harga']; ?></td>
                <td><?= $b['total']; ?></td>
                <td><?= $b['image']; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>