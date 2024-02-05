@extends('dashboard/layouts/main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <a href="/dashboard/users" class="btn btn-success"><span data-feather="arrow-left"></span> Semua Data Guru</a>
                <a href="/dashboard/users/{{ $user->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/users/{{ $user->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus {{ $user->name }}? Pastikan terlebih dahulu semua postingan milik {{ $user->name }} sudah terhapus.')"><span data-feather="x-circle"></span> Hapus</button>
                </form>
                <div class="text-center m-3 border p-3">
                    @if ($user->image)
                        <img src="{{ asset('img/user-images/' . $user->image) }}" class="img-thumbnail rounded-circle" style="
                        width: 200px;
                        height: 200px;
                        object-fit: cover;
                        border-radius: 100%;
                        border: 6px solid rgba(255, 255, 255, 0.15);
                        margin: 0 auto;border-radius: 100%;">
                    @else
                        <img src="{{ asset('img/user-images/' . $image) }}" class="img-thumbnail rounded-circle" style="
                        width: 200px;
                        height: 200px;
                        object-fit: cover;
                        border-radius: 100%;
                        border: 6px solid rgba(255, 255, 255, 0.15);
                        margin: 0 auto;border-radius: 100%;">
                    @endif
                    <h5 class="mt-3">{{ $user->name }}</h5>
                    <h6 class="text-muted">{{ $user->email }}</h6>
                    <p class="text-muted">{{ $user->position }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection