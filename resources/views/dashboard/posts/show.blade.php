@extends('dashboard/layouts/main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h4 class="mb-3">{{ $post->title }}</h4>
                <p>oleh <b>{{ $post->author->name }}</b> di <b>{{ $post->category->name }}</b></p>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Semua Postingan Saya</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus postingan {{ $post->title }}?')"><span data-feather="x-circle"></span> Hapus</button>
                </form>
                @if ($post->image)
                    <div>
                        <img src="{{ asset('img/post-images/' . $post->image) }}" class="img-fluid mt-3">
                    </div>
                @else
                    <div>
                        <img src="{{ asset('img/post-images/' . $image) }}" class="img-fluid mt-3">
                    </div>
                @endif
                <article class="my-3">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection