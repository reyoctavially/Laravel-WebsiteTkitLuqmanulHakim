@extends('dashboard/layouts/main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <a href="/dashboard/testimonials" class="btn btn-success"><span data-feather="arrow-left"></span> Semua Testimoni</a>
                <a href="/dashboard/testimonials/{{ $testimonial->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/testimonials/{{ $testimonial->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus testimoni dari {{ $testimonial->name }}?')"><span data-feather="x-circle"></span> Hapus</button>
                </form>
                <div class="text-center m-3 border p-3">
                    @if ($testimonial->image)
                        <img src="{{ asset('img/testimonial-images/' . $testimonial->image) }}" width="200" class="img-thumbnail rounded-circle">
                    @else
                        <img src="{{ asset('img/testimonial-images/' . $image) }}" width="200" class="img-thumbnail rounded-circle">
                    @endif
                    <h5 class="mt-3">{{ $testimonial->name }}</h5>
                    <h6 class="text-muted">{{ $testimonial->status }}</h6>
                    <p class="text-muted">{!! $testimonial->body !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection