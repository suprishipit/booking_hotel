<!-- info kamar -->
<center>
    <section class="projects-section bg-light" id="signup">
        <div class="container-fluid ">


            <div class="row mx-5">
                <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2 mx-auto">
                    <div class="card-header py-3 ">

                        <h6 class="m-0 font-weight-bold text-primary mb-3">DATA CUSTAMER</h6>
                        <div class="mb-2">
                            <?php if (validation_errors()) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= validation_errors(); ?>
                                </div>
                            <?php } ?>
                            <?= $this->session->flashdata('pesan'); ?>
                            <a style="text-decoration:none" href="<?= base_url('laporan/cetak_data_user'); ?>" class="btn-sm btn-primary mb-3"><i class="fas fa-print"></i> Print</a>
                            <a style="text-decoration:none" href="<?= base_url('laporan/laporan_user_pdf'); ?>" class="btn-sm btn-warning mb-3"><i class="fas fa-file-pdf"></i> Download Pdf</a>
                            <a style="text-decoration:none" href="<?= base_url('laporan/export_excel_user'); ?>" class="btn-sm btn-success mb-3"><i class="fas fa-file-excel"></i> Export ke Excel</a>
                        </div>
                    </div>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                    <td><?= $no; ?></td>
                                    <td><?= $u['id_user']; ?></td>
                                    <td><?= $u['nama_user']; ?></td>
                                    <td><?= $u['email']; ?></td>
                                    <td><?= $u['password']; ?></td>
                                    <td> <a href="<?= base_url('member/ubahPassword'); ?>" class="text text-white btn btn-info ml-3 my-3"><i class="fas fa-user-edit"></i> Ubah password</a></td>
                                    <td> <a href="<?= base_url('member/hapus/') . $u['id_user']; ?>" class="text text-white btn btn-info ml-3 my-3"><i class="fas fa-trash"></i> Hapus</a></td>

                                </tr>
                            <?php
                                $no++;
                            }
                            ?>


                        </tbody>
                    </table>
                </div>


                <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2 mx-auto">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary mb-3">DATA ADMIN</h6>
                        <div>
                            <div class="mb-2">
                                <?php if (validation_errors()) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= validation_errors(); ?>
                                    </div>
                                <?php } ?>
                                <?= $this->session->flashdata('pesan'); ?>
                                <a style="text-decoration:none" href="<?= base_url('laporan/cetak_data_admin'); ?>" class="btn-sm btn-primary mb-3"><i class="fas fa-print"></i> Print</a>
                                <a style="text-decoration:none" href="<?= base_url('laporan/laporan_admin_pdf'); ?>" class="btn-sm btn-warning mb-3"><i class="fas fa-file-pdf"></i> Download Pdf</a>
                                <a style="text-decoration:none" href="<?= base_url('laporan/export_excel_admin'); ?>" class="btn-sm btn-success mb-3"><i class="fas fa-file-excel"></i> Export ke Excel</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                        <td><?= $no; ?></td>
                                        <td><?= $a['id_admin']; ?></td>
                                        <td><?= $a['nama_user']; ?></td>
                                        <td><?= $a['email']; ?></td>
                                        <td><?= $a['sandi']; ?></td>
                                        <td> <a href="<?= base_url('admin/ubahData'); ?>" class="text text-white btn btn-info ml-3 my-3"><i class="fas fa-user-edit"></i> Ubah password</a></td>
                                        <td> <a href="<?= base_url('admin/hapus/') . $a['id_admin']; ?>" class="text text-white btn btn-info ml-3 my-3"><i class="fas fa-trash"></i> Hapus</a></td>

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
    </section>
</center>