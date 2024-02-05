@extends('home/layouts/main')

@section('container') 
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <img src="/img/akhi.png" style="max-height: 100px;">
                <h2>Informasi</h2>
                <img src="/img/ukhti.png" style="max-height: 100px;">
                <h3>Lebih Banyak <span>Informasi</span></h3>
                <p>Informasi mengenai TKIT Luqmanul Hakim, seperti Informasi PPDB, Informasi Kegiatan, dan sebagainya.</p>
            </div>

            <div class="row">
                <div class="section-title col-lg-12 d-flex justify-content-center">
                  <ul id="portfolio-flters">
                    <li><h2><a href="/home/posts">Semua</h2></li>
                    @foreach ($categories as $category)
                        <li><h2><a href="/home/posts?category={{ $category->slug }}">{{ $category->name }}</a></h2></li>
                    @endforeach
                  </ul>
                </div>
              </div>

            <div class="row justify-content-center mb-3">
                <div class="col-md-6">
                    <form action="/home/posts">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
        
                        @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif
        
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari informasi.." name="search" value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        
            @if ($posts->count())
                <div class="row">
                    <center>
                        <div class="card mb-3 shadow p-1 mb-3 bg-white col-md-6 rounded">
                            @if ($posts[0]->image)
                                <div class="rounded">
                                    <img src="{{ asset('img/post-images/' . $posts[0]->image) }}" class="img-fluid rounded">
                                </div>
                            @else
                                <div class="rounded">
                                    <img src="{{ asset('img/post-images/' . $image) }}" class="card-img-top rounded">
                                </div>
                            @endif
                            <div class="card-body text-center">
                            <h5 class="card-title"><a href="/home/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
                            <p>
                                <small class="text-muted">
                                    Oleh <a href="/home/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> di <a href="/home/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text">{{ $posts[0]->excerpt }}</p>
                            <a href="/home/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </center>
                    <div class="row">
                        @foreach ($posts->skip(1) as $post)
                            <div class="col-md-4 mb-3">
                                <div class="card h-100 shadow p-1 mb-5 bg-white rounded" data-aos="fade-up" data-aos-delay="100">
                                    <div class="position-absolute px-3 py-2 text-white rounded" style="background-color: rgba(255, 165, 0, 0.7)"><a href="/home/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                                    @if ($post->image)
                                        <img src="{{ asset('img/post-images/' . $post->image) }}" class="img-fluid rounded">
                                    @else
                                        <img src="{{ asset('img/post-images/' . $image) }}" class="card-img-top rounded">
                                    @endif
                                    <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p>
                                        <small class="text-muted">
                                           Oleh <a href="/home/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                                        </small>
                                    </p>
                                    <p class="card-text">{{ $post->excerpt }}</p>
                                    <a href="/home/posts/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <p class="text-center fs-4">No post found.</p>
            @endif
        
            <div class="d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </section>
@endsection