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
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>