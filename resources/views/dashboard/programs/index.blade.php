@extends('dashboard/layouts/main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h4>Data Program Unggulan</h4>
    </div>

    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="table-responsive col-lg-8 mb-3">
      <a href="/dashboard/programs/create" class="btn btn-primary mb-3"><span data-feather="plus-circle"></span> Buat Program Baru</a>
        <table class="table table-stripped" id="programs">
          <thead>
            <tr>
              <th></th>
              <th scope="col">#</th>
              <th scope="col">Nama Program</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($programs as $program)       
                <tr data-child-value="<b>Keterangan:</b> </br> {{ $program->excerpt }}">
                    <td class="dt-control"></td>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $program->title }}</td>
                    <td>
                        <a href="/dashboard/programs/{{ $program->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                        <a href="/dashboard/programs/{{ $program->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                        <form action="/dashboard/programs/{{ $program->slug }}" method="POST" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin akan menghapus program {{ $program->title }}?')"><span data-feather="x-circle"></span></button>
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
          var table = $('#programs').DataTable();
          $('#programs tbody').on('click', 'td.dt-control', function () {
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