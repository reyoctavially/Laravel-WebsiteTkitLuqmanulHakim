@extends('home/layouts/main')

@section('container')
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <img src="/img/akhi.png" style="max-height: 100px;">
                <h2>Aktivitas Sekolah</h2>
                <img src="/img/ukhti.png" style="max-height: 100px;">
                <h3>Berbagai <span>Aktivitas</span></h3>
                <p>Aktivitas Taman Kanak-Kanak Islam Terpadu Luqmanul Hakim.</p>
            </div>
            <div class="row">
                @foreach ($activities as $activity)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 shadow p-1 mb-5 bg-white rounded" data-aos="fade-up" data-aos-delay="100">
                            @if ($activity->image)
                                <img src="{{ asset('img/activity-images/' . $activity->image) }}" class="img-fluid rounded">
                            @else
                                <img src="{{ asset('img/activity-images/' . $image) }}" class="card-img-top rounded">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $activity->title }}</h5>
                                <p class="card-text">{{ $activity->excerpt }}</p>
                                <a href="/home/activities/{{ $activity->slug }}" class="text-decoration-none btn btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $activities->links() }}
            </div>
        </div>
    </section>
@endsection