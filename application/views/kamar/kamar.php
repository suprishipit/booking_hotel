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
                                <h1 class="h4 text-gray-900 mb-4">update kamar hotel susaluk</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('kamar') ?>">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user mt-3" id="nama_kamar" name="jenis_kamar" placeholder="Masukan jenis" value="<?= set_value('jenis_user'); ?>">
                                        <?= form_error('jenis_kamar', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user mt-3" id="stok" name="stok" placeholder="masukan stok">
                                        <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        update kamar
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