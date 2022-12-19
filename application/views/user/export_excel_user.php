<?php
header("content-type: application/vnd-ms-excel");
header("content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<h3>
    <center>Laporan Data custamer</center>
</h3>
<br />
<table class="table-data">
    <thead>
        <tr>
            <th>no.</th>
            <th>id user</th>
            <th>nama</th>
            <th>email</th>
            <th>sandi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($user as $u) {

        ?>
            <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $u['id_user']; ?></td>
                <td><?= $u['nama_user']; ?></td>
                <td><?= $u['email']; ?></td>
                <td><?= $u['password']; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>