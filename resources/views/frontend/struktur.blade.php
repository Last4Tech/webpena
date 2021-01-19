@extends('frontend.layout.main')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Detail Dokumentasi</h2>
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Detail Dokumentasi</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="{{voyager::image($code->image_1)}}" class="img-fluid" alt="">
            <img src="{{voyager::image($code->image_2)}}" class="img-fluid" alt="">
            <img src="{{voyager::image($code->image_3)}}" class="img-fluid" alt="">
          </div>

        </div>

        <div class="portfolio-description">
          <h2 class="upper">{{$code->komponen}}</h2>
          <p>{!!$code->penjelasan!!}</p>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main>

@endsection