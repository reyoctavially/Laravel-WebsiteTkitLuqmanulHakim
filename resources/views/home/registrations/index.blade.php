@extends('home/layouts/main')

@section('container')
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <img src="/img/akhi.png" style="max-height: 100px;">
                <h2>Pendaftaran</h2>
                <img src="/img/ukhti.png" style="max-height: 100px;">
                <h3>Ayo Lakukan <span>Pendaftaran</span></h3>
                <p>Pendaftaran Peserta Didik Baru TKIT Luqmanul Hakim.</p>
            </div>
        
            @foreach ($registrations as $registration)
                <div class="row">
                    <div class="card mb-3 shadow p-1 mb-5 bg-white rounded">
                        @if ($registration->image)
                            <img src="{{ asset('img/registration-images/' . $registration->image) }}" class="img-fluid rounded">
                        @else
                            <img src="{{ asset('img/registration-images/' . $image) }}" class="card-img-top rounded">
                        @endif
                        <div class="card-body">
                        <h4 class="card-title text-center" style="color: orange">{{ $registration->title }}</h4>
                        <p class="card-text">{!! $registration->body !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection