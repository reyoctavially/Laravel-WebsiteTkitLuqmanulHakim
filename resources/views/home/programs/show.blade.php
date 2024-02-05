@extends('home/layouts/main')

@section('container')
    <main id="main" data-aos="fade-up">
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">
    
            <div class="d-flex justify-content-between align-items-center">
                <ol>
                <li><a href="/">Beranda</a></li>
                <li><a href="/home/programs">Program Unggulan</a></li>
                <li>Rincian Program Unggulan</li>
                </ol>
            </div>
    
            </div>
        </section><!-- Breadcrumbs Section -->
        <div class="container mt-3">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 shadow p-3 mb-5 bg-white rounded border">
                    <h4 class="text-center mb-3" style="color: orange">{{ $program->title }}</h4>
                        @if ($program->image)
                            <center>
                                <img src="{{ asset('img/program-images/' . $program->image) }}" class="img-fluid rounded">
                            </center>
                        @else
                            <center>
                                <img src="{{ asset('img/program-images/' . $image) }}" class="card-img-top rounded">
                            </center>
                        @endif
                        <article class="my-3">
                            {!! $program->body !!}
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection