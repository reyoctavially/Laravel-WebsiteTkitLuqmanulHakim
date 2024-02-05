@extends('dashboard/layouts/main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h4>Data Guru</h4>
    </div>

    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-lg-10" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="table-responsive col-lg-10 mb-3">
      <a href="/dashboard/users/create" class="btn btn-primary mb-3"><span data-feather="plus-circle"></span> Tambah Data Guru</a>
        <table class="table table-stripped" id="users">
          <thead>
            <tr>
              <th></th>
              <th scope="col">#</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Email</th>
              <th scope="col">Status</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($users as $user)
                @if ($user->is_active == 1)
                  <tr data-child-value="
                    <b>Jabatan:</b>
                    <br/>
                    {{ $user->position }}
                    <br/>
                    <b>Username:</b>
                    <br/>
                    {{ $user->username }}
                    <br/>
                    <b>Status Akun:</b>
                    <br/>
                    @if ($user->is_active == 1)
                      Aktif
                    @else
                      Nonaktif
                    @endif
                    ">
                @else
                  <tr data-child-value="
                    <b>Username:</b>
                    <br/>
                    {{ $user->username }}
                    <br/>
                    <b>Status Akun:</b>
                    <br/>
                    @if ($user->is_active == 1)
                      Aktif
                    @else
                      Nonaktif
                    @endif
                    "
                    class="bg-danger text-light">
                @endif       
                    <td class="dt-control"></td>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if ($user->is_admin == 1)
                            Admin
                        @else
                            Non-Admin
                        @endif
                    <td>
                        <a href="/dashboard/users/{{ $user->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                        <a href="/dashboard/users/{{ $user->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                        <form action="/dashboard/users/{{ $user->id }}" method="POST" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin akan menghapus {{ $user->name }}? Pastikan terlebih dahulu semua postingan milik {{ $user->name }} sudah terhapus.')"><span data-feather="x-circle"></span></button>
                        </form>
                        <form action="/dashboard/users/reset/{{ $user->id }}" method="POST" class="d-inline">
                          @method('put')
                          @csrf
                          <button class="badge bg-secondary border-0" onclick="return confirm('Apakah anda yakin akan reset kata sandi untuk {{ $user->name }}?')"><span data-feather="key"></span></button>
                        </form>
                    </td>
                </tr>
              @endforeach
          </tbody>
        </table>
      </div>
      
      
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      
      <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.5/datatables.min.js"></script>
      <script>
        function format(value) {
          return '<div>' + value + '</div>';
        }

        $(document).ready( function () {
          var table = $('#users').DataTable();
          $('#users tbody').on('click', 'td.dt-control', function () {
          var tr = $(this).closest('tr');
          var row = table.row( tr );

          if ( row.child.isShown() ) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Open this row
                row.child(format(tr.data('child-value'))).show();
                tr.addClass('shown');
            }
        });
        });
      </script>
@endsection