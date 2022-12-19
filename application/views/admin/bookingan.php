<!-- info castamer -->
<center>
    <section class="signup-section" id="about">
        <div class="container px-4 px-lg-5">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary mb-3">DATA BOOKINGAN</h6>
                        <div class="mb-2">
                            <?php if (validation_errors()) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= validation_errors(); ?>
                                </div>
                            <?php } ?>
                            <?= $this->session->flashdata('pesan'); ?>
                            <a style="text-decoration:none" href="<?= base_url('laporan/cetak_data_booking'); ?>" class="btn-sm btn-primary mb-3"><i class="fas fa-print"></i> Print</a>
                            <a style="text-decoration:none" href="<?= base_url('laporan/laporan_booking_pdf'); ?>" class="btn-sm btn-warning mb-3"><i class="fas fa-file-pdf"></i> Download Pdf</a>
                            <a style="text-decoration:none" href="<?= base_url('laporan/export_excel_booking'); ?>" class="btn-sm btn-success mb-3"><i class="fas fa-file-excel"></i> Export ke Excel</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                            <td><?= $no; ?></td>
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
                                            <td> <a href="<?= base_url('booking/hapus/') . $b['id_boking']; ?>" class="text text-white btn btn-info ml-3 my-3"><i class="fas fa-trash"></i> Hapus</a></td>

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