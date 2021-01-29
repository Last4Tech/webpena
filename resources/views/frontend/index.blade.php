<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UKM FIP PENA UTM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/nivo-slider/css/nivo-slider.css')}}" rel="stylesheet">



  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">

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
        <i class="icofont-envelope"></i><a href="mailto:{{setting('site.email')}}">{{setting('site.email')}}</a>
        <i class="icofont-phone">{{setting('site.phone')}}</i>
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
        <a href="{{url('/')}}"><img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{url('/')}}">Home</a></li>
          <li><a href="#blog">Berita</a></li>
          <li><a href="#portfolio">Dokumentasi</a></li>
          <li><a href="#team">DKO</a></li>
          <li class="drop-down"><a href="{{url('/page')}}">Profil</a>
            <ul>
              <li><a href="{{url('/page/sejarah-ukm-fkip-pena')}}">Sejarah</a></li>
              <li><a href="{{url('/page/arti-lambang')}}">Arti Lambang</a></li>
              <li><a href="{{url('/page/visi-misi')}}">Visi Misi</a></li>
              <li class="drop-down"><a href="#">Struktur</a>
                <ul>
                  <li><a href="#">Dewan Kehormatan</a></li>
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
          <li><a href="{{url('/admin')}}" class="btn-get-started">login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('{{voyager::image(setting('site.Welcome'))}}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Selamat datang di <span>UKM FIP PENA</span></h2>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Tentang Kami</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('{{voyager::image(setting('site.foto_pengurus'))}}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Pengurus Organisasi 2021</h2>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Kepenguruan</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('{{voyager::image(setting('site.dokumentasi'))}}');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Berita Utama</h2>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Berita Utama</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="{{voyager::image(setting('site.bg_profile'))}}" class="img-fluid" alt="">
            <a href="{{setting('site.profile')}}" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2>About Us</h2>
              <p>Merupakan Organisasi Kemahasiswaan Fakultas Ilmu Pendidikan Universitas Trunojoyo Madura yang Bergerak di Bidang Pengembangan Penelitian dan Penalaran.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="{{url('/page/sejarah-ukm-fkip-pena')}}">Sejarah Singkat</a></h4>
              <p class="description">UKM FKIP PENA didirikan pada tanggal 3 Juni 2014. ....</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="{{url('/page/arti-lambang')}}">Arti Lambang</a></h4>
              <p class="description">Lambang UKM FIP PENA MEiliki arti ...</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Lists Section =======
    <section class="about-lists">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
            <span>01</span>
            <h4>Lorem Ipsum</h4>
            <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
            <span>02</span>
            <h4>Repellat Nihil</h4>
            <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
            <span>03</span>
            <h4> Ad ad velit qui</h4>
            <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <span>04</span>
            <h4>Repellendus molestiae</h4>
            <p>Inventore quo sint a sint rerum. Distinctio blanditiis deserunt quod soluta quod nam mider lando casa</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="400">
            <span>05</span>
            <h4>Sapiente Magnam</h4>
            <p>Vitae dolorem in deleniti ipsum omnis tempore voluptatem. Qui possimus est repellendus est quibusdam</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="500">
            <span>06</span>
            <h4>Facilis Impedit</h4>
            <p>Quis eum numquam veniam ea voluptatibus voluptas. Excepturi aut nostrum repudiandae voluptatibus corporis sequi</p>
          </div>

        </div>

      </div>
    </section>

     ======= Counts Section
    <section class="counts section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile" style="color: #20b38e;"></i>
              <span data-toggle="counter-up">232</span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-document-folder" style="color: #c042ff;"></i>
              <span data-toggle="counter-up">521</span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="count-box">
              <i class="icofont-live-support" style="color: #46d1ff;"></i>
              <span data-toggle="counter-up">1,463</span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
            <div class="count-box">
              <i class="icofont-users-alt-5" style="color: #ffb459;"></i>
              <span data-toggle="counter-up">15</span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section> End Counts Section -->

    <!-- ======= Services Section ======= -->
    <!--<section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Berita Terbaru</h2>
        </div>

        <div class="owl-carousel owl-theme owl-loaded">
          <div class="mr-2 ml-2">
              </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="icofont-computer"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="icofont-image"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="icofont-settings"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>

    </div>
    </section>End Services Section -->
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Berita Terbaru</h2>
              </div>
            </div>
          </div>
          <div class="owl-carousel owl-theme">
            @foreach ($post as $itemPost)
            <div class="mr-2 ml-2">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="/post/{{$itemPost->slug}}">
                    <img src="{{Voyager::image($itemPost->thumbnail('cropped'))}}" alt="" width="100%">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="/post/{{$itemPost->slug}}">{{$jml}} comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>{{$itemPost->created_at}}
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="/post/{{$itemPost->slug}}">{{$itemPost->title}}</a>
                  </h4>
                  <p>
                    {{$itemPost->excerpt}}
                  </p>
                </div>
                <span>
                  <a href="/post/{{$itemPost->slug}}" class="ready-btn">Read more</a>
                </span>
              </div>
              <!-- Start single blog -->
            </div>
            @endforeach
          </div>
          <center><a href="/post"><button class="ready-btn" style="color:darkslategrey;">Lebih Banyak</button></a></center>
        </div>
      </div>
    </section><!-- End Blog Section -->
    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>GALERI FOTO</h2>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              @foreach($kd as $itemkd)
              <li data-filter=".filter-{{$itemkd->category_id}}">{{$itemkd->category_id}}</li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
          @foreach($image as $img)
          <div class="col-lg-4 col-md-6 portfolio-item filter-{{$img->category_id}}">
            <div class="portfolio-wrap">
              <img src="{{Voyager::image($img->thumbnail('cropped', 'image_1'))}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$img->category_id}}</h4>
                <p>{{$img->title}}</p>
                <div class="portfolio-links">
                  <a href="{{Voyager::image($img->image_1)}}" data-gall="portfolioGallery" class="venobox" title="{{$img->title}}"><i class="icofont-eye"></i></a>
                  <a href="/galery/{{$img->slug}}" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Dewan Kehormatan Organisasi</h2>
          <p>Merupakan Unsur Organisasi Tertinggi Yang terdiri Dari 10 Orang Yang dipilih 5 Tahun Sekali, dengan Ketua Diganti Tiap Semester.</p>
        </div>


        <div class="owl-carousel owl-theme">

          <div class="card mr-2 ml-2" data-aos="fade-up">
            <div class="member">
              <div class="pic"><img src="{{asset('assets/img/team/team-1.jpg')}}" alt=""></div>
              <div class="member-info">
                <h4>Aris Kusuma Hidayat, S.Pd.</h4>
                <span>Periode Januari-Juni 2018</span>
                <div class="social">
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-search-document"></i></a>
                  <a href=""><i class="icofont-phone"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="card mr-2 ml-2" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="{{asset('assets/img/team/team-2.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Candra Kusuma, S.Pd.</h4>
                <span>Periode Juli-Desember 2018</span>
                <div class="social">
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-search-document"></i></a>
                  <a href=""><i class="icofont-phone"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="card mr-2 ml-2" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="{{asset('assets/img/team/team-3.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Khoirul Huda, S.Pd.</h4>
                <span>Periode Januari-Juni 2019</span>
                <div class="social">
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-search-document"></i></a>
                  <a href=""><i class="icofont-phone"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="card mr-2 ml-2" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="{{asset('assets/img/team/team-4.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Khoirus Shalihatinnur, S.Pd.</h4>
                <span>Periode Juli-Desember 2019</span>
                <div class="social">
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-search-document"></i></a>
                  <a href=""><i class="icofont-phone"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="card mr-2 ml-2" data-aos="fade-up">
            <div class="member">
              <div class="pic"><img src="{{asset('assets/img/team/team-5.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mas Gangsar Ahmad Romadhon, S.Pd.</h4>
                <span>Periode Januari-Juni 2020</span>
                <div class="social">
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-search-document"></i></a>
                  <a href=""><i class="icofont-phone"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="card mr-2 ml-2" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="{{asset('assets/img/team/team-6.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Moh Zakky Aprillaries H, S.Pd.</h4>
                <span>Periode Juli-Desember 2020</span>
                <div class="social">
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-search-document"></i></a>
                  <a href=""><i class="icofont-phone"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="card mr-2 ml-2" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="{{asset('assets/img/team/team-7.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Much. Abid Aladdin, S.Pd.</h4>
                <span>Periode Januari-Juni 2021</span>
                <div class="social">
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-search-document"></i></a>
                  <a href=""><i class="icofont-phone"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="card mr-2 ml-2" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="{{asset('assets/img/team/team-8.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Putri Diah Kusuma Wardani, S.Pd.</h4>
                <span>Periode Juli-Desember 2021</span>
                <div class="social">
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-search-document"></i></a>
                  <a href=""><i class="icofont-phone"></i></a>
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Frequently Asked Questions Section 
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="row  d-flex align-items-stretch">

          <div class="col-lg-6 faq-item" data-aos="fade-up">
            <h4>Non consectetur a erat nam at lectus urna duis?</h4>
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
            <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
            <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="300">
            <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="400">
            <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="500">
            <h4>Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor?</h4>
            <p>
              Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
            </p>
          </div>

        </div>

      </div>
    </section> End Frequently Asked Questions Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Jalan Raya Telang PO BOX 02 UTM Bangkalan 69162</p>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>info@ukmfippena.or.id<br>ukmfippena03@gmail.com</p>
            </div>
          </div>

          <!--          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
            </div>
          </div> -->

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="{{route('contact.send')}}" method="POST" role="form" class="php-email-form">
              @csrf
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>

            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

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
              <strong>Email:</strong> {{setting('site.email')}}<br>
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
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/page')}}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/post')}}">Berita Terbaru</a></li>
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
            @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif
            <form action="{{route('sub.send')}}" method="post">
              @csrf
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
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/nivo-slider/js/jquery.nivo.slider.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script>
    $(document).ready(function() {
      $(".owl-carousel").owlCarousel({
        autoplay: true,
        autoplayHoverPause: true,
        //items: 3,
        //nav: true,
        //dots: true,
        loop: true,
        responsive: {
          0:{
            items: 1,
            nav: false
          },
          600:{
            items: 2,
            nav: false
          },
          1000:{
            items: 3,
            nav: true
          }
        }
      });
    });
  </script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>