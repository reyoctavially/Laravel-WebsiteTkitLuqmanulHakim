@extends('dashboard/layouts/main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h4 class="mb-3">{{ $allpost->title }}</h4>
                <p>oleh <b>{{ $allpost->author->name }}</b> di <b>{{ $allpost->category->name }}</b></p>
                <a href="/dashboard/allposts" class="btn btn-success"><span data-feather="arrow-left"></span> Semua Postingan</a>
                <a href="/dashboard/allposts/destroy/{{ $allpost->slug }}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus postingan {{ $allpost->title }}?')"><span data-feather="x-circle"></span> Hapus</a>
                @if ($allpost->image)
                    <div>
                        <img src="{{ asset('img/post-images/' . $allpost->image) }}" class="img-fluid mt-3">
                    </div>
                @else
                    <img src="{{ asset('img/post-images/' . $image) }}" class="img-fluid mt-3">
                @endif
                <article class="my-3">
                    {!! $allpost->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection