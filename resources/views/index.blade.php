@extends('home/layouts/main')

@section('container')
    <section id="hero" class="d-flex align-items-center">
        @foreach ($profiles as $profile)
            <div class="container position-relative" data-aos="zoom-out" data-aos-delay="100">
                <img src="/img/akhi.png" style="max-height: 200px;">
                <img src="/img/ukhti.png" style="max-height: 200px;">
                <h1>TKIT <span>Luqmanul Hakim</span></h1>
                <h2>Rumah Bayi, Kober, dan TKIT Luqmanul Hakim</h2>
                <div class="d-flex">
                    <a href="/home/profiles" class="btn-get-started scrollto">Profil Sekolah</a>
                    <a href="{{ $profile->link_embed }}" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Video Sekolah</span></a>
                </div>
            </div>
        @endforeach
    </section><!-- End Hero -->
@endsection