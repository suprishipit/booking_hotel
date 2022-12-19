<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            font-family: Verdana;
            padding: 10px 10px 10px 10px;
        }

        h3 {
            font-family: Verdana;
        }
    </style>
    <h3>
        <center>Laporan Data Admin</center>
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
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>