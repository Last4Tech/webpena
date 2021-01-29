@extends('frontend.layout.main')

@section('content')

<section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>DAFTAR KETUA UMUM UKM FIP PENA UTM</h2>
          <p>Berikut adalah daftar nama Ketua Umum UKM FIP PENA dari awal periode sampai sekarang</p>
        </div>


        <div class="owl-carousel owl-theme">
        @foreach($leader as $l)
          <div class="card mr-2 ml-2" data-aos="fade-up">
            <div class="member">
              <div class="pic"><img src="{{voyager::image($l->thumbnail('cropped', 'image'))}}" alt=""></div>
              <div class="member-info">
                <h4>{{$l->nama}}</h4>
                <span>Periode {{$l->Periode}}</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section>

@endsection