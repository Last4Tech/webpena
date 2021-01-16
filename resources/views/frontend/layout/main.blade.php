<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UKM FIP PENA UTM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico')}}">
  <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/vendor/owlcarousel/owl.theme.default.min.css')}}">
  <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/nivo-slider/css/nivo-slider.css')}}" rel="stylesheet">



  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/css/custom.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v2.5.0
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">info@ukmfippena.or.id</a>
        <i class="icofont-phone">database</i>
      </div>
      <div class="social-links float-right">
        <a href="https://www.facebook.com/ukmf.p.utm" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/ukmfip_pena/" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCmzlVudOhr7QJ7WHO6ZdJ7g" class="skype"><i class="icofont-youtube"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <!-- <h1 class="text-light"><a href="{{url('/')}}"><span></span></a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{url('/')}}"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('/post')}}">Berita</a></li>
          <li><a href="{{url('/galery')}}">Dokumentasi</a></li>
          <li><a href="{{url('/')}}">DKO</a></li>
          <li class="drop-down"><a href="">Profil</a>
            <ul>
              <li><a href="{{url('/2')}}">Sejarah</a></li>
              <li><a href="{{url('/3')}}">Arti Lambang</a></li>
              <li><a href="{{url('/4')}}">Visi Misi</a></li>
              <li class="drop-down"><a href="#">Struktur</a>
                <ul>
                  <li><a href="{{url('/dko')}}">Dewan Kehormatan</a></li>
                  <li><a href="#">Dewan Pertimbangan</a></li>
                  <li><a href="#">Badan Pengrus Harian</a></li>
                  <li><a href="#">Devivi Internal</a></li>
                  <li><a href="#">Devisi Eksternal</a></li>
                  <li><a href="#">Devisi Event</a></li>
                </ul>
              </li>
              <li><a href="#">Prestasi</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="">Kegiatan</a>
            <ul>
              <li><a href="">KAJIAN</a></li>
              <li><a href="">SEMINAR</a></li>
              <li><a href="">PENA BULAN PKM</a></li>
              <li><a href="">PENA EMAS</a></li>
              <li><a href="">RATE NEM</a></li>
              <li><a href="">PENA SHOW</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="login" class="btn-get-started">login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

    @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>UKM FIP PENA UTM</h3>
            <p>
              Jalan Raya Telang PO BOX 02<br>
              UTM Bangkalan 69162<br><br>
              <!--<strong>Phone:</strong> +1 5589 55488 55<br>-->
              <strong>Email:</strong> info@ukmfippena.or.id<br>
            </p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/ukmf.p.utm" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/ukmfip_pena/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCmzlVudOhr7QJ7WHO6ZdJ7g" class="google-plus"><i class="bx bxl-youtube"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Berita Terabru</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kegiatan</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Link Terkait</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Database Anggta</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sistem E-Voting</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pena Menulis</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Enter your email address to subscribe to this blog and receive notifications of new posts by email.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <!--<div class="copyright">
        &copy; Copyright <strong><span>Mamba</span></strong>. All Rights Reserved
      </div>-->
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ 
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
        Presented by _Last_4-AL
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{ asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/nivo-slider/js/jquery.nivo.slider.js')}}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
  <script>
    $(document).ready(function() {
      $(".owl-carousel").owlCarousel({
        autoplay: true,
        autoplayHoverPause: true,
        items: 3,
        nav: true,
        dots: true,
        loop: true,
      });
    });
  </script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js')}}"></script>

</body>

</html>