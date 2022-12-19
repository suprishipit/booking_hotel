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
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>