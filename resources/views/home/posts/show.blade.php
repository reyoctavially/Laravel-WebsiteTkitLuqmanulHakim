@extends('home/layouts/main')

@section('container')
    <main id="main" data-aos="fade-up">
         <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">
    
            <div class="d-flex justify-content-between align-items-center">
                <ol>
                <li><a href="/">Beranda</a></li>
                <li><a href="/home/posts">Informasi</a></li>
                <li>Rincian Informasi</li>
                </ol>
            </div>
    
            </div>
        </section><!-- Breadcrumbs Section -->

        <div class="container mt-3">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 shadow p-3 mb-5 bg-white rounded border">
                    <h4 style="color: orange">{{ $post->title }}</h4>
                    <p>oleh <a href="/home/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> di <a href="/home/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                    @if ($post->image)
                        <center>
                            <img src="{{ asset('img/post-images/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid rounded">
                        </center>
                    @else
                        <center>
                            <img src="{{ asset('img/post-images/' . $image) }}" class="card-img-top rounded">
                        </center>
                    @endif
                    <article class="my-3">
                        {!! $post->body !!}
                    </article>
                </div>
            </div>
        </div>
    </main>
@endsection