<?php
header("content-type: application/vnd-ms-excel");
header("content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<h3>
    <center>Laporan Data Admin</center>
</h3>
<br />
<table class="table-data">
    <thead>
        <tr>
            <th>no.</th>
            <th>id admin</th>
            <th>nama</th>
            <th>email</th>
            <th>sandi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($admin as $a) {

        ?>
            <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $a['id_admin']; ?></td>
                <td><?= $a['nama_user']; ?></td>
                <td><?= $a['email']; ?></td>
                <td><?= $a['sandi']; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>