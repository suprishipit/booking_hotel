<script>
    function startCalc() {
        interval = setInterval(calc(), 1);
    }

    function calc() {
        h1 = document.getElementById('tanggal_masuk').value;
        h2 = document.getElementById('tanggal_keluar').value;
        one = document.autoSumForm.jumlah_vip.value;
        two = document.autoSumForm.harga.value;
        tgl1 = new Date(h1);
        tgl2 = new Date(h2);
        there = tgl2.getTime() - tgl1.getTime();


        // Hitung jumlah hari di antara dua tanggal, bagi perbedaan waktu kedua tanggal dengan jumlah milidetik dalam sehari (1000 * 60 * 60 * 24).

        tothari = there / (1000 * 3600 * 24);
        if (one > 10) {
            diskon = document.autoSumForm.diskon.value = (tothari * 1) * (one * 1) * (two * 1) * 10 / 100;
            document.autoSumForm.total.value = (tothari * 1) * (one * 1) * (two * 1) - (diskon * 1);
        } else {
            document.autoSumForm.total.value = (tothari * 1) * (one * 1) * (two * 1);
            document.autoSumForm.diskon.value = 0;
        }
    }

    function stopCalc() {
        clearInterval(interval);
    }
</script>
<section class="projects-section bg-light" id="daftarADM">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image ">
                        <img class="img-fluid mb-3 mb-lg-0 pt-5 px-4 " src="<?= base_url('assets/img/vip.JPEG') ?>" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">booking kamar vip hotel susaluk</h1>
                            </div>
                            <form class="user" method="post" name='autoSumForm' action="<?= base_url('booking/ngebooking_vip') ?>">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user mt-3" id="nama_user" name="nama_user" placeholder="Masukan Nama">
                                        <?= form_error('nama_user', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user mt-3" id="email" name="email" placeholder="masukan Email" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class=" form-group">
                                    <input type="text" class="form-control form-control-user mt-3" id="no_hp" name="no_hp" placeholder="masukan no_hp">
                                    <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="date" class="form-control form-control-user mt-3" id="tanggal_masuk" name="tanggal_masuk" placeholder="masukan tanggal_masuk">
                                        <?= form_error('tanggal_masuk', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0 mt-4">
                                        <label for="">cek in</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="date" class="form-control form-control-user mt-3" id="tanggal_keluar" name="tanggal_keluar" placeholder="Masukan Nama" value="<?= set_value('tanggal_keluar'); ?>">
                                        <?= form_error('tanggal_keluar', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0 mt-4">
                                        <label for="">cek out</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="jenis_kamar" class="form-control form-control-user mt-3" id="jenis_kamar" name="jenis_kamar" placeholder="masukan jenis kamar" value="VIP">
                                    <?= form_error('jenis_kamar', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" class="form-control form-control-user mt-3" id="jumlah_vip" name="jumlah_vip" placeholder="masukan jumlah kamar" onfocus="startCalc();" onblur="stopBlur();">
                                        <?= form_error('jumlah_vip', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="mt-3" for="">harga</label>
                                        <input type="harga" class="form-control form-control-user mt-1" id="harga" name="harga" placeholder="masukan harga" onfocus="startCalc();" onblur="stopBlur();" value="399000">
                                        <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="mt-3" for="">diskon</label>
                                        <input type="text" class="form-control form-control-user mt-1" id="diskon" name="diskon" placeholder="masukan diskon" onfocus="startCalc();" onblur="stopBlur();" value="0">
                                        <?= form_error('diskon', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label class="mt-3" for="">total</label>
                                        <input type="harga" class="form-control form-control-user mt-1" id="total" name="total" placeholder="masukan total" onfocus="startCalc();" onblur="stopBlur();" value="0">
                                        <?= form_error('total', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Booking
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