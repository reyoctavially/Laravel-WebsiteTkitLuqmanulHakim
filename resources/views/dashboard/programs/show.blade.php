@extends('dashboard/layouts/main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h4 class="mb-3">{{ $program->title }}</h4>
                
                <a href="/dashboard/programs" class="btn btn-success"><span data-feather="arrow-left"></span> Semua Program</a>
                <a href="/dashboard/programs/{{ $program->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/programs/{{ $program->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus program {{ $program->title }}?')"><span data-feather="x-circle"></span> Hapus</button>
                </form>
                @if ($program->image)
                    <div>
                        <img src="{{ asset('img/program-images/' . $program->image) }}" class="img-fluid mt-3">
                    </div>
                @else
                    <img src="{{ asset('img/program-images/' . $image) }}" class="img-fluid mt-3">
                @endif
                <article class="my-3">
                    {!! $program->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection