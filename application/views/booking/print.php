<!-- info castamer -->
<center>
    <section class="signup-section" id="about">
        <div class="container px-4 px-lg-5">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800"></h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">screenshoot table</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>no.</th>
                                        <th>email</th>
                                        <th>nama user</th>
                                        <th>tanggal masuk</th>
                                        <th>tanggal keluar</th>
                                        <th>jenis kamar</th>
                                        <th>jumlah kamar</th>
                                        <th>harga</th>
                                        <th>total</th>
                                        <th>image</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($boking as $b) {

                                    ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $b['id_boking']; ?></td>
                                            <td><?= $b['email']; ?></td>
                                            <td><?= $b['nama_user']; ?></td>
                                            <td><?= $b['tanggal_masuk']; ?></td>
                                            <td><?= $b['tanggal_keluar']; ?></td>
                                            <td><?= $b['jenis_kamar']; ?></td>
                                            <td><?= $b['jumlah_kamar']; ?></td>
                                            <td><?= $b['harga']; ?></td>
                                            <td><?= $b['total']; ?></td>
                                            <td><?= $b['jumlah']; ?></td>


                                            <td><button>print</button></td>

                                        </tr>
                                    <?php
                                        $no++;
                                    }
                                    ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
</center>
<!-- end data castamer -->