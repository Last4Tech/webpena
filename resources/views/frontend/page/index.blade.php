@extends('frontend.layout.main')

@section('content')
<main id="main">

  <!-- ======= Blog Header ======= -->
  <div class="header-bg page-area" style="background-image: url('assets/img/slide/slide-2.jpg');">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">Profil</h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">UKM FIP PENA UTM</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Blog Header -->

  <!-- ======= Blog Page ======= -->
  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog">
                <h4>Postingan terbaru</h4>
                <div class="recent-post">
                @foreach ($page as $itempage )
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="/page/{{$itempage->slug}}">
                        <img src="{{Voyager::image($itempage->thumbnail('cropped', 'image'))}}" alt="">
                      </a>
                    </div>
                    <div class="pst-content">
                      <p><a href="/page/{{$itempage->slug}}"> {{$itempage->title}}</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                @endforeach
                </div>
              </div>
              <!-- recent end -->
            </div>
          </div>
        </div>
        <!-- End left sidebar -->
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            @foreach($page as $itemPage)
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog-details.html">
                    <img src="{{Voyager::image($itemPage->thumbnail('cropped', 'image'))}}" alt="">
                  </a>
                </div>
                <div>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>{{$itemPage->created_at}}
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="#">{{$itemPage->title}}</a>
                  </h4>
                  <p>
                  {{$itemPage->excerpt}}
                  </p>
                </div>
                <span>
                  <a href="/page/{{$itemPage->slug}}" class="ready-btn">Read more</a>
                </span>
              </div>
            </div>
            @endforeach
            <!-- End single blog -->
            
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Blog Page -->

</main><!-- End #main -->
@endsection