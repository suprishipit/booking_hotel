<section class="projects-section bg-light" id="loginADM">

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

                                    <?= $this->session->flashdata('pesan'); ?>
                                    <div class="p-5 text-center">
                                        <?= form_open_multipart('home'); ?>
                                        <div class="form-group row">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">TRANSFER</h1>
                                            </div>
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">
                                                    <p>lakukan transfer ke 834878470 dengan nama susaluk khusus setelah itu sreenshoot untuk bukti pengecekan di resepsionis
                                                    </p>
                                                </h1>

                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <div class="col-sm-10">
                                                <div class="row">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-end mt-3">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">back</button>

                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>