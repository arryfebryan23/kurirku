<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kurirku</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url() ?>assets/home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/home/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/home/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/home/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/home/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/home/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/home/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url() ?>assets/home/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Dewi - v2.1.0
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- Header -->
    <header id="header" class="fixed-top">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo" style="font-size: 17px;">
                <span>
                    KurirKu
                </span>
                <span style="color: yellow;">
                    Express
                </span>
            </a>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#cek-resi">Tracking Resi</a></li>
                    <li><a href="#keunggulan">About</a></li>
                    <li><a href="#cek-tarif">Cek Tarif</a></li>
                    <li><a href="#pilihan-paket">Pilihan Paket</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav><!-- .nav-menu -->

            <a href="<?= base_url('auth'); ?>" class="get-started-btn scrollto">Login Admin</a>

        </div>
    </header>
    <!-- End Header -->


    <!-- content here -->
    <?php $this->load->view($page); ?>
    <!-- end of content -->

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Kurirku Express 2020</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <div class="social-links mt-3">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url() ?>assets/home/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/home/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url() ?>assets/home/vendor/php-email-form/validate.js"></script>
    <script src="<?php echo base_url() ?>assets/home/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>assets/home/vendor/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url() ?>assets/home/vendor/venobox/venobox.min.js"></script>
    <script src="<?php echo base_url() ?>assets/home/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>assets/home/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url() ?>assets/home/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url() ?>assets/home/js/main.js"></script>
    <!-- End of Footer -->

</body>

</html>