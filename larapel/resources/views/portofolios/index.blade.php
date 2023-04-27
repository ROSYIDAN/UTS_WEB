@extends('layout')

@section('body')
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">List Portfolio</h5>

              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the card's
                content.
              </p>

              <a href="{{ route('portofolios.create') }}" class="btn btn-success mb-4">Add +</a>

              <table class="table table-hover table-bordered text-center">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $index => $item)
                    <tr>
                    <input type="hidden" class="delete_id" value="{{ $item->id }}">
                      <td>{{ $index + 1 }}</td>
                      <td><img src="{{ asset($item->image_file_url) }}" alt="" width="200"></td>
                      <td>{{ $item->title }}</td>
                      <td>{{ $item->description }}</td>
                      <td>
                        <form  action="{{ route('portofolios.destroy', $item->id) }}" method="post">
                          <a href="{{ route('portofolios.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger btn-sm btndelete">Hapus</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('scripts')
<script>
    $(document).ready(function () {

        $('.btndelete').click(function (e) {
            e.preventDefault();

            var deleteid = $(this).closest("tr").find('.delete_id').val();
            swal({
                    title: "Apakah anda yakin?",
                    text: "Setelah dihapus, Anda tidak dapat memulihkan Data ini lagi!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {

                        var data = {
                            "_token": $('input[name=_token]').val(),
                            'id': deleteid,
                        };
                        $.ajax({
                            type: "DELETE",
                            url: 'portofolios/' + deleteid,
                            data: data,
                        });
                    }
                    location.reload();
                });
              });

    });

</script>
@endsection