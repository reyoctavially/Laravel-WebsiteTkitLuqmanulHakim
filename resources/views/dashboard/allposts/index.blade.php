@extends('dashboard/layouts/main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h4>Data Postingan</h4>
    </div>

    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-lg-12" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="table-responsive col-lg-12 mb-3">
        <table class="table table-stripped" id="allposts">
          <thead>
            <tr>
              <th></th>
              <th scope="col">#</th>
              <th scope="col">Judul Postingan</th>
              <th scope="col">Tanggal Posting</th>
              <th scope="col">Kategori</th>
              <th scope="col">Author</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($allposts as $post)       
                <tr data-child-value="<b>Kutipan:</b> </br> {{ $post->excerpt }}">
                    <td class="dt-control"></td>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at->format('d, M Y') }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>{{ $post->author->name }}</td>
                    <td>
                        <a href="/dashboard/allposts/show/{{ $post->slug }}" class="badge bg-info m-1"><span data-feather="eye"></span></a>
                        <a href="/dashboard/allposts/destroy/{{ $post->slug }}" class="badge bg-danger m-1" onclick="return confirm('Apakah anda yakin akan menghapus postingan {{ $post->title }}?')"><span data-feather="x-circle"></span></a>
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
          var table = $('#allposts').DataTable();
          $('#allposts tbody').on('click', 'td.dt-control', function () {
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