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
    <link href="<?= base_url('assets/css/Lugares.css') ?> " rel="stylesheet" />
    <link href="<?= base_url('assets/css/album.css') ?> " rel="stylesheet" />

    <!-- VUE JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script> -->
    <script src="<?= base_url('assets/js/vue.js') ?>"></script>


    <title><?= esc($title) ?></title>
</head>

<body>
    <div id="App">
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">

            <div class="container">

                <!-- <a class="navbar-brand" href="<?= base_url() ?>">Trip App</a> -->
                <a class="navbar-brand" href="<?php echo base_url('lista_sitios'); ?>">Trip App</a>

                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">

                        <?php
                        if (!$is_logged) {
                            echo '<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="' . base_url(route_to('login')) . '">Inciar Sesion</a></li>';
                            echo '<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Sobre Nosotros</a></li>';
                            echo '<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contactanos</a></li>';
                            // echo '<a href="' . base_url(route_to('register')) . '" class="btn btn-primary">Sign-up</a>';
                        } else {
                            echo '<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded">Hola! ' . htmlentities($username) . ' </a></li>';
                            echo '<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="' . base_url(route_to('logout')) . '">Logout</a></li>';
                            // echo '<a href="' . base_url(route_to('logout')) . '" class="btn btn-outline-primary me-2">Logout</a>';          
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>