@extends('dashboard/layouts/main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h4 class="mb-3">{{ $registration->title }}</h4>
                
                <a href="/dashboard/registrations" class="btn btn-success"><span data-feather="arrow-left"></span> Semua Info Registrasi</a>
                <a href="/dashboard/registrations/{{ $registration->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/registrations/{{ $registration->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus info registrasi {{ $registration->title }}?')"><span data-feather="x-circle"></span> Hapus</button>
                </form>
                @if ($registration->image)
                    <div>
                        <img src="{{ asset('img/registration-images/' . $registration->image) }}" class="img-fluid mt-3">
                    </div>
                @else
                    <img src="{{ asset('img/registration-images/' . $image) }}" class="img-fluid mt-3">
                @endif
                <article class="my-3">
                    {!! $registration->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection