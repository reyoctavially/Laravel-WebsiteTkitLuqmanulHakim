@extends('home/layouts/main')
@section('container')

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <img src="/img/akhi.png" style="max-height: 100px;">
        <h2>Profil</h2>
        <img src="/img/ukhti.png" style="max-height: 100px;">
        <h3>Mengenai <span>TKIT Luqmanul Hakim</span></h3>
        <p>Taman Kanak-Kanak Islam Terpadu Luqmanul Hakim.</p>
      </div>

      <div class="row">
          @foreach ($profiles as $profile)
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">

              @if ($profile->image_satu)
                <div class="rounded shadow mb-3 bg-white rounded">
                  <img src="{{ asset('img/profile-images/' . $profile->image_satu) }}" class="img-fluid" alt="">
                </div>
              @else
                <div class="rounded shadow mb-3 bg-white rounded">
                  <img src="{{ asset('img/profile-images/' . $image) }}" class="img-fluid" alt="">
                </div>
              @endif

              @if ($profile->image_dua)
                <div class="rounded shadow mb-3 bg-white rounded">
                  <img src="{{ asset('img/profile-images/' . $profile->image_dua) }}" class="img-fluid" alt="">
                </div>
              @else
                <div class="rounded shadow mb-3 bg-white rounded">
                  <img src="{{ asset('img/profile-images/' . $image) }}" class="img-fluid" alt="">
                </div>
              @endif

              @if ($profile->image_tiga)
                <div class="rounded shadow mb-3 bg-white rounded">
                  <img src="{{ asset('img/profile-images/' . $profile->image_tiga) }}" class="img-fluid" alt="">
                </div>
              @else
                <div class="rounded shadow mb-3 bg-white rounded">
                  <img src="{{ asset('img/profile-images/' . $image) }}" class="img-fluid" alt="">
                </div>
              @endif

            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column" data-aos="fade-up" data-aos-delay="100"> 
              <h3>Sekolah Islam Terpadu</h3>
              <p class="text-justify">
                {!! $profile->profil !!}
              </p>
              <ul>
                <li>
                  <i class="bx bx-book"></i>
                  <div>
                    <h5>Visi</h5>
                    <p class="text-justify">{!! $profile->visi !!}</p>
                  </div>
                </li>
                <li>
                  <i class="bx bx-book"></i>
                  <div>
                    <h5>Misi</h5>
                    <p class="text-justify">{!! $profile->misi !!}</p>
                  </div>
                </li>
              </ul>
              <h3>Sejarah Singkat</h3>
              <p class="text-justify">
                {!! $profile->sejarah !!}
              </p>
            </div>
          @endforeach
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="zoom-in">

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          @foreach ($testimonials as $testimonial)
            <div class="swiper-slide">
              <div class="testimonial-item">
                  @if ($testimonial->image)
                    <img src="{{ asset('img/testimonial-images/' . $testimonial->image) }}" class="testimonial-img" alt="" style="max-height: 350px; max-width: 350px; overflow:hidden;">
                  @else
                    <img src="{{ asset('img/testimonial-images/' . $foto) }}" class="testimonial-img" alt="">
                  @endif
                <h3>{{ $testimonial->name }}</h3>
                <h4>{{ $testimonial->status }}</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  {{  $testimonial->body  }}
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          @endforeach
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

@endsection