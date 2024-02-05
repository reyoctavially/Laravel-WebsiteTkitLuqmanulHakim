@extends('dashboard/layouts/main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h4 class="mb-3">{{ $activity->title }}</h4>
                
                <a href="/dashboard/activities" class="btn btn-success"><span data-feather="arrow-left"></span> Semua Aktivitas</a>
                <a href="/dashboard/activities/{{ $activity->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/activities/{{ $activity->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus aktivitas {{ $activity->title }}?')"><span data-feather="x-circle"></span> Hapus</button>
                </form>
                @if ($activity->image)
                    <div>
                        <img src="{{ asset('img/activity-images/' . $activity->image) }}" class="img-fluid mt-3">
                    </div>
                @else
                    <img src="{{ asset('img/activity-images/' . $image) }}" class="img-fluid mt-3">
                @endif
                <article class="my-3">
                    {!! $activity->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection