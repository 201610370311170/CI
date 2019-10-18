<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/images/icon/favicon.ico') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/metisMenu.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/slicknav.min.css') ?>">
    <!-- amchart css -->
    <!-- others css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/typography.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/default-css.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css') ?>">
    <!-- modernizr css -->
    <script src="<?php echo base_url('assets/js/vendor/modernizr-2.8.3.min.js') ?>"></script>
    <!-- JS -->
    <script src="<?php echo base_url('assets/js/jquery_3-4.js') ?>"></script>

    <!-- dataTables -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dataTables/jquery.dataTables.min.css') ?>">
    <script src="<?php echo base_url('assets/js/dataTables/jquery.dataTables.min.js') ?>"></script>

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">

        <!-- SIDEBAR MENU START-->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="<?php echo base_url('/') ?>"><img src="<?php echo base_url('assets/images/icon/logo.png') ?>" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li <?php if ($this->uri->segment(1) == "dashboard") {
                                    echo "class='active'";
                                } ?>>
                                <a href="<?php echo base_url('dashboard') ?>"><i class="ti-dashboard"></i>&nbsp Dashboard</a>
                            </li>
                            <li <?php if ($this->uri->segment(1) == "pegawai") {
                                    echo "class='active'";
                                } ?>>
                                <a href="<?php echo base_url('pegawai') ?>"><i class="ti-user"></i>&nbsp Kelola Data</a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('absensi') ?>"><i class="ti-check-box"></i></span>&nbsp Absensi</a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url('gaji') ?>"><i class="ti-dashboard"></i></span>&nbsp Gaji</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- SIDEBAR MENU END -->


        <!-- MAIN CONTENT START -->
        <div class="main-content">

            <!-- HEADER AREA START -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-10 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <div class="user-profile pull-right">
                        <img class="avatar user-thumb" src="<?php echo base_url('assets/images/author/avatar.png') ?>" alt="avatar">
                        <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Admin<i class="fa fa-angle-down"></i></h4>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo base_url('landing_page/logout') ?>"><i class="ti-power-off"></i>&nbsp Logout</a>
                        </div>
                    </div>
                </div>


            </div>
            <!-- HEADER AREA END -->