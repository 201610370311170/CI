<!DOCTYPE html>
<html lang="en">

<head>
    <title>OneSchool &mdash; Website by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/landing_page/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/landing_page/css/jquery-ui.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/landing_page/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/landing_page/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/landing_page/css/owl.theme.default.min.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/landing_page/css/jquery.fancybox.min.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/landing_page/css/bootstrap-datepicker.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/landing_page/fonts/flaticon/font/flaticon.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/landing_page/css/aos.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/landing_page/css/style.css') ?>">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto w-25"><a href="index.html">PT. Bercocok Tanam</a></div>

                    <div class="ml-auto w-25">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                                <li class="cta"><a href="#contact-section" class="nav-link"><span>Contact Us</span></a></li>
                            </ul>
                        </nav>
                        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
                    </div>
                </div>
            </div>

        </header>

        <div class="intro-section" id="home-section">

            <div class="slide-1" style="background-image: url('<?php echo base_url('assets/landing_page/images/hero_1.jpg') ?>');" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-4">
                                    <h1 data-aos="fade-up" data-aos-delay="100">Selamat Datang</h1>
                                    <p class="mb-4" data-aos="fade-up" data-aos-delay="200">Silahkan masukan username dan password anda untuk masuk ke halaman.</p>
                                </div>

                                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                                    <form action="<?php echo base_url('landing_page/login') ?>" method="post" class="form-box">
                                        <h3 class="h4 text-black mb-4">Masuk</h3>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Username" name="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password" name="password">
                                            <small style="float: right;"><a href="#">Lupa Password?</a></small>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-pill" value="Masuk">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div> <!-- .site-wrap -->

    <script src="<?php echo base_url('assets/landing_page/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing_page/js/jquery-migrate-3.0.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing_page/js/jquery-ui.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing_page/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing_page/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing_page/js/owl.carousel.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing_page/js/jquery.stellar.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing_page/js/jquery.countdown.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing_page/js/bootstrap-datepicker.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing_page/js/jquery.easing.1.3.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing_page/js/aos.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing_page/js/jquery.fancybox.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/landing_page/js/jquery.sticky.js') ?>"></script>


    <script src="<?php echo base_url('assets/landing_page/js/main.js') ?>"></script>

</body>

</html>