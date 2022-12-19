<!-- info kamar -->

<center>

    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <!-- kamar -->
                <div class="row mb-5">

                    <h1 class="nav-link">INFO KAMAR</h1>
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-2 mb-4 btn-outline-success">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body ">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Total kamar </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                            $where = ['stok != 0'];
                                            $totalstok = $this->ModelKamar->total('stok', $where);
                                            echo $totalstok;
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-person-booth fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- kamar vip -->
                    <div class="col-xl-3 col-md-2 mb-4 btn-outline-success">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            kamar vip</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                            $where = ['VIP != 0'];
                                            $totalVIP = $this->ModelKamar->total('VIP', $where);
                                            echo $totalVIP;
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-person-booth fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- kamar reguler -->
                    <div class="col-xl-3 col-md-6 mb-4 btn-outline-success">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            kamar Reguler</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                            $where = ['Reguler != 0'];
                                            $totalReguler = $this->ModelKamar->total('Reguler', $where);
                                            echo $totalReguler;
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-person-booth fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- family  -->
                    <div class="col-xl-3 col-md-6 mb-4 btn-outline-success">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            kamar Family</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                            $where = ['Family != 0'];
                                            $totalFamily = $this->ModelKamar->total('Family', $where);
                                            echo $totalFamily;
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-person-booth fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row gx-0 mb-4 mb-lg-5 align-items-center ">
                <!-- kamar -->
                <div class="row mb-5">
                    <div class="col-xl-3 col-md-6 mb-4 btn-outline-success">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-4">
                                            Buat Bookingan </div>
                                        <a style="text-decoration:none" href="<?php echo base_url() . 'booking/ngebooking_vip'; ?>" class="btn-sm btn-primary">vip</a>
                                        <a style="text-decoration:none" href="<?php echo base_url() . 'booking/ngebooking_reguler'; ?>" class="btn-sm btn-primary">reguler</a>
                                        <a style="text-decoration:none" href="<?php echo base_url() . 'booking/ngebooking_family'; ?>" class="btn-sm btn-primary mb-1">family</a>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-2 mb-4 btn-outline-success">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            kamar vip kosong </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                            $where = ['jumlah_vip != 0'];
                                            $jumlahvip = $this->ModelBooking->total('jumlah_vip', $where);
                                            $jml = $totalVIP - $jumlahvip;
                                            echo $jml;
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-person-booth fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4 btn-outline-success">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            kamar Reguler kosong</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                            $where = ['jumlah_reguler != 0'];
                                            $jumlahreguler = $this->ModelBooking->total('jumlah_Reguler', $where);
                                            $jmh = $totalReguler - $jumlahreguler;
                                            echo $jmh;
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-person-booth fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4 btn-outline-success">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            kamar Family kosong</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                            $where = ['jumlah_family != 0'];
                                            $totaljumlah_family = $this->ModelBooking->total('jumlah_family', $where);
                                            $jmlh = $totalFamily - $totaljumlah_family;
                                            echo $jmlh;
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-person-booth fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>



        </div>
    </section>
</center>
<!-- end data kamar -->