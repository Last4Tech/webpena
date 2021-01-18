@extends('frontend.layout.main')

@section('content')

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
      @foreach($galery as $img)
      <div class="col-lg-4 col-md-6 portfolio-item filter-{{$img->category_id}}">
        <div class="portfolio-wrap">
          <img src="{{Voyager::image($img->thumbnail('cropped', 'image_1'))}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>{{$img->category_id}}</h4>
            <p>{{$img->title}}</p>
            <div class="portfolio-links">
              <a href="/storage/{{$img->image_1}}" data-gall="portfolioGallery" class="venobox" title="{{$img->title}}"><i class="icofont-eye"></i></a>
              <a href="/galery/{{$img->slug}}" title="More Details"><i class="icofont-external-link"></i></a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section>
@endsection