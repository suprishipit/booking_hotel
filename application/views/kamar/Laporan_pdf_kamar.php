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
        .table-data th td {
            border: 1px solid black;
            font-size: 11pt;
            padding: 10px 10px 10px 10px;
        }
    </style>
    <h3>
        <center>Laporan Data Booking Kamar Hotel SUSALUK</center>
    </h3>
    </br>
    <table class="table-data">
        <thead>
            <tr>
                <th>Nama</th>
                <th>jenis kamar</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($kamar as $b) {
            ?>
                <tr>
                    <th scope-"row"><? -$no++; ?></th>
                    <td><?= $b['kamar']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>