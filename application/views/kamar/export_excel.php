<?php
header("content-type: application/vnd-ms-excel");
header("content-disposition: attachment; filename=$title,xls");
header("pragma: no-chace");
header("expires : 0");
?>

<h3>
    <center>Laporan Data Booking Kamar Hotel SUSALUK</cemter>
</h3>
</br>
<table>
    <thead>
        <tr>
            <th> nama </th>

        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($buku as $b) {
        ?>
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><?= $b['kamar']; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>