@extends('frontend.layout.main')

@section('content')
<main id="main">

  <!-- ======= Blog Header ======= -->
  <div class="header-bg page-area" style="background-image: url('{{voyager::image(setting('site.dokumentasi'))}}');">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">Berita</h1>
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
              <!-- search option start -->
              <form action="{{url('/post')}}" method="GET" role="search">
                <div class="search-option">
                  <input type="text" placeholder="Search" id="term" name="term">
                  <button class="button" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </form>
              <!-- search option end -->
            </div>
            <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog">
                <h4>Postingan terbaru</h4>
                <div class="recent-post">
                @foreach ($blog as $itemblog )
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="{{route('PostStage',$itemblog->slug)}}">
                        <img src="{{Voyager::image($itemblog->thumbnail('cropped'))}}" alt="">
                      </a>
                    </div>
                    <div class="pst-content">
                      <p><a href="{{route('PostStage',$itemblog->slug)}}"> {{$itemblog->title}}</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                @endforeach
                </div>
              </div>
              <!-- recent end -->
            </div>
            <div class="single-blog-page">
              <div class="left-blog">
                <h4>categories</h4>
                <ul>
                @foreach($category as $itemCategory)
                  <li>
                    <a href="{{route('post.category',$itemCategory->slug)}}">{{$itemCategory->name}}</a>
                  </li>
                @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- End left sidebar -->
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            @foreach($post as $itemPost)
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog-details.html">
                    <img src="{{voyager::image($itemPost->thumbnail('cropped'))}}" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">11 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>{{$itemPost->created_at}}
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="#">{{$itemPost->title}}</a>
                  </h4>
                  <p>
                  {{$itemPost->excerpt}}
                  </p>
                </div>
                <span>
                  <a href="/post/{{$itemPost->slug}}" class="ready-btn">Read more</a>
                </span>
              </div>
            </div>
            @endforeach
            <!-- End single blog -->
            
          </div>
          {{ $post->links() }}
        </div>
      </div>
    </div>
  </div><!-- End Blog Page -->

</main><!-- End #main -->
@endsection