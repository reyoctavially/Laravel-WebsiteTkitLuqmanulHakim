@extends('dashboard/layouts/main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h4>Edit Data Guru</h4>
    </div>   
    
    <div class="col-lg-8">
        <form action="/dashboard/users/{{ $user->id }}" method="POST" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control @error('name') is-invalid  @enderror" id="name" name="name" required autofocus value="{{ old('name', $user->name) }}">
              @error('name')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid  @enderror" id="email" name="email" required autofocus value="{{ old('email', $user->email) }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid  @enderror" id="username" name="username" required autofocus value="{{ old('username', $user->username) }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Jabatan</label>
                <input type="text" class="form-control @error('position') is-invalid  @enderror" id="position" name="position" required autofocus value="{{ old('position', $user->position) }}">
                @error('position')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Foto Guru</label>
                <input type="hidden" name="oldImage" value="{{ $user->image }}">
                @if ($user->image)
                    <img src="{{ asset('img/user-images/' . $user->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="is_admin" class="form-label">Status Admin</label>
                <select class="form-select" name="is_admin">
                    @if ($user->is_admin == 1)
                        <option value="1" selected>Admin</option>
                        <option value="0">Non-Admin</option>
                    @else
                        <option value="1">Admin</option>
                        <option value="0" selected>Non-Admin</option>
                    @endif
                </select>
            </div>
            <div class="mb-3">
                <label for="is_active" class="form-label">Status Akun</label>
                <select class="form-select" name="is_active">
                    @if ($user->is_active == 1)
                        <option value="1" selected>Aktif</option>
                        <option value="0">Nonaktif</option>
                    @else
                        <option value="1">Aktif</option>
                        <option value="0" selected>Nonaktif</option>
                    @endif
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui Data Guru</button>
        </form>
    </div>
    <script>
        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            
            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection