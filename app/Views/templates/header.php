<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Load Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/assets/favicon.ico') ?>" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

    <link href="<?= base_url('assets/css/styles.css') ?> " rel="stylesheet" />
    <!-- <link href="<?= base_url('assets/css/Lugares.css') ?> " rel="stylesheet" /> -->
    <link href="<?= base_url('assets/css/album.css') ?> " rel="stylesheet" />


    <title><?= esc($title) ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">

        <div class="container">

            <a class="navbar-brand"  href="<?php echo base_url(); ?>/touristicplace/backPage">Trip App</a>

            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="<?= base_url(route_to('login')) ?>">Inciar Sesion</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Sobre Nosotros</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contactanos</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <!-- <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="<?= base_url(route_to('home')) ?>" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="<?= base_url(route_to('features')) ?>" class="nav-link px-2 link-dark">Features</a></li>
                <li><a href="<?= base_url(route_to('pricing')) ?>" class="nav-link px-2 link-dark">Pricing</a></li>
                <li><a href="<?= base_url(route_to('faqs')) ?>" class="nav-link px-2 link-dark">FAQs</a></li>
                <li><a href="<?= base_url(route_to('about')) ?>" class="nav-link px-2 link-dark">About</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <a href="<?= base_url(route_to('login')) ?>" type="button" class="btn btn-outline-primary me-2">Login</a>
                <a href="<?= base_url(route_to('register')) ?>" type="button" class="btn btn-primary">Sign-up</a>
            </div>
        </header> -->
    </div>