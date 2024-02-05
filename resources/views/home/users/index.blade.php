@extends('home/layouts/main')
@section('container')
  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <img src="/img/akhi.png" style="max-height: 100px;">
        <h2>Guru Pengajar</h2>
        <img src="/img/ukhti.png" style="max-height: 100px;">
        <h3>Mengenal <span>Guru Pengajar</span></h3>
        <p>Membimbing, mendidik, dan mengajar adalah tugas kami.</p>
      </div>

      <div class="row">
        @foreach ($users as $user)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                @if ($user->image)
                  <div style="max-height: 250px; overflow:hidden;">
                    <img src="{{ asset('img/user-images/' . $user->image) }}" class="img-fluid" alt="">
                  </div>
                @else
                  <div style="max-height: 250px; overflow:hidden;">
                    <img src="{{ asset('img/user-images/' . $image) }}" class="img-fluid" alt="">
                  </div>
                @endif
              </div>
              <div class="member-info">
                <h4>{{ $user->name }}</h4>
                <span>{{ $user->position }}</span>
              </div>
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Team Section -->
@endsection