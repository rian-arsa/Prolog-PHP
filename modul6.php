<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kelompok 5</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Eterna - v2.0.0
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container d-flex">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="index.php"><span>KELOMPOK 5</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>

                    <li class="drop-down"><a href="#">Team</a>
                        <ul>
                            <li><a href="#">ELOK CAHYANING ASIH</a></li>
                            <li><a href="#">NINA AULIA SAPUTRO</a></li>
                            <li><a href="#">RIAN ARI SASONO</a></li>
                            <li><a href="#">SHAFA TASSYA AULIA</a></li>
                            <li><a href="#">YUSHIVAN RENDI HARVIANSYAH</a></li>

                        </ul>
                    </li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <div class="container">
        <div style="margin: 100px" class="jawaban">

        </div>
    </div>
    <div class="container">
        <div class="modul1">
            <h1 style="text-align: center">Modul 6 </h1>
            <h3 style="text-align: center">Binary Tree</h3>
        </div>
        <div style="margin: 100px" class="jawaban">

        </div>
        <p>Dalam modul ini, kami mengimplementasikan modul 6 untuk merekomendasikan Smartphone sesuai keinginan pembeli</p>
        <div style="margin: 100px" class="jawaban">

        </div>

        <form action="jawaban6.php" method="POST">
            <label for="">Apakah anda membeli HP karena Penampilan nya? </label><br>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio" name="pertama" value="1">
                <label class="custom-control-label" for="customRadio">Ya</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio2" name="pertama" value="2">
                <label class="custom-control-label" for="customRadio2">Tidak</label>
            </div><br><br><br>
            <label for="">Apakah anda membeli HP karena Kamera nya?</label><br>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio3" name="kedua" value="1">
                <label class="custom-control-label" for="customRadio3">Ya</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio4" name="kedua" value="2">
                <label class="custom-control-label" for="customRadio4">Tidak</label>
            </div><br><br><br>
            <label for="">Apakah anda membeli HP karena RAM nya?</label><br>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio5" name="tiga" value="1">
                <label class="custom-control-label" for="customRadio5">Ya</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio6" name="tiga" value="2">
                <label class="custom-control-label" for="customRadio6">Tidak</label>
            </div><br><br><br>
            <label for="">Apakah anda membeli HP karena Memori nya?</label><br>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio7" name="empat" value="1">
                <label class="custom-control-label" for="customRadio7">Ya</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio8" name="empat" value="2">
                <label class="custom-control-label" for="customRadio8">Tidak</label>
            </div><br><br><br>
            <label for="">Apakah anda membeli HP karena Lebar layar nya?</label><br>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio9" name="lima" value="1">
                <label class="custom-control-label" for="customRadio9">Ya</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="customRadio10" name="lima" value="2">
                <label class="custom-control-label" for="customRadio10">Tidak</label>
            </div><br><br><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="container">
        <div style="margin: 100px" class="jawaban">

        </div>
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    </div>
                    <div class="col-lg-6">
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Kelompok 5</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>