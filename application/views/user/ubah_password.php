<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <h2 class="text-center">ubah Password</h2>
                                <?= $this->session->flashdata('pesan'); ?>

                                <form action="<?= base_url('member/ubahPassword'); ?>" method="post">
                                    <div class="form-group">
                                        <label for="password_sekarang">email Saat ini</label>
                                        <input type="email" class="form-control form-control-user " id="email" name="email" placeholder="masukan Email anda" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-gorup">
                                        <label for="password_sekarang">Password Saat ini</label>
                                        <input type="password" class="form-control" id="password_sekarang" name="password_sekarang">
                                        <?= form_error('password_sekarang', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-gorup">
                                        <label for="password_baru1">Password Baru</label>
                                        <input type="password" class="form-control" id="password_baru1" name="password_baru1">
                                        <?= form_error('password_baru1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-gorup">
                                        <label for="password_baru2">Ulangi Password </label>
                                        <input type="password" class="form-control" id="password_baru2" name="password_baru2">
                                        <?= form_error('password_baru2', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary mt-3">Ubah Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>