<section class="projects-section bg-light" id="daftarADM">
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image ">
                        <img class="img-fluid mb-3 mb-lg-0 pt-5 px-4 " src="<?= base_url('assets/img/reguler.JPEG') ?>" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">daftar castamer hotel susaluk</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('member/daftar_user') ?>">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user mt-3" id="nama_user" name="nama_user" placeholder="Masukan Nama" value="<?= set_value('nama_user'); ?>">
                                        <?= form_error('nama_user', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user mt-3" id="email" name="email" placeholder="masukan Email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user mt-3" id="password" name="password" placeholder="masukan Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user mt-3" id="sandi1" name="sandi1" placeholder="ulangi Password">
                                        <?= form_error('sandi1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                </div>
                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Daftar Menjadi user
                                    </button>
                                </div>
                                <hr>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>