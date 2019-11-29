<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        JJM Registro Estudiantil
    </title>
    <!-- Favicon -->
    <link href="<?php echo base_url('assets/img/brand/favicon.png'); ?>" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="<?php echo base_url('assets/js/plugins/nucleo/css/nucleo.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="<?php echo base_url('assets/css/argon-dashboard.css?v=1.1.0'); ?>" rel="stylesheet" />
</head>

<body class="">
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand pt-0" href="<?php echo base_url('inicio'); ?>">
                <img src="<?php echo base_url('assets/img/brand/blue.png'); ?>" class="navbar-brand-img" alt="...">
            </a>
            <!-- User -->
            <ul class="nav align-items-center d-md-none">
                <li class="nav-item dropdown">

                </li>
                <li class="nav-item dropdown">
    
                </li>
            </ul>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="<?php echo base_url('inicio'); ?>">
                                <img src="<?php echo base_url('assets/img/brand/blue.png'); ?>">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item <?php if ($page == 'inicio') echo 'active'; ?>" >
                         <a class=" nav-link <?php if ($page == 'inicio') echo 'active'; ?>" href="<?php echo base_url('inicio'); ?>">
                        <i class="ni ni-tv-2 text-primary"></i> Inicio
                        </a>
                    </li>
                    <li class="nav-item <?php if ($page == 'nuevo') echo 'active'; ?>">
                        <a class="nav-link <?php if ($page == 'nuevo') echo 'active'; ?>" href="<?php echo base_url('nuevo'); ?>">
                            <i class="ni ni-single-02 text-green"></i> Nuevo registro
                        </a>
                    </li>
                    <li class="nav-item <?php if ($page == 'mantenimiento') echo 'active'; ?>">
                        <a class="nav-link <?php if ($page == 'mantenimiento') echo 'active'; ?>" href="<?php echo base_url('mantenimiento'); ?>">
                            <i class="ni ni-bullet-list-67 text-red"></i> Mantenimiento
                        </a>
                    </li>

                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item <?php if ($page == 'nosotros') echo 'active'; ?>">
                        <a class="nav-link <?php if ($page == 'nosotros') echo 'active'; ?>" href="<?php echo base_url('nosotros'); ?>">
                            <i class="ni ni-building text-yellow"></i> Nosotros
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">

                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->