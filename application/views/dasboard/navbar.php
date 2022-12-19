<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>admin susaluk</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url() ?>assets/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">


    <!-- navbar -->

    <nav class="navbar  navbar-expand-lg bg-light fixed-top ">
        <div class="container-fluid">

            <a class="navbar-brand bg-light  " href="#page-top">Hotel Susaluk</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link btn-outline-success" href="#projects"> Kamar</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn-outline-success" href="#signup">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-outline-success" href="#about">bookingan</a>
                    </li>
                    <li class="nav-item"><a class="nav-link btn-outline-success" href="<?php echo base_url() . 'admin/daftar_admin'; ?>">DaftarADM</a></li>
                </ul>
                <div class="d-flex">
                    <a class="nav-link btn-outline-success" data-toggle="login_admin" data-target="" href="<?php echo base_url() . 'admin2/logout'; ?>">Logout</a>
                </div>
            </div>
        </div>
    </nav>