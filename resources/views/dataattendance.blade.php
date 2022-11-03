@extends('layout.Client')

@section('content')

@push('css')

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endpush

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Attendance</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Attendance</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <div class="container">
    <a href="/tambahattendance" class="btn btn-success"><i class="nav-icon fas fa-plus"></i> Tambah Data</a>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Clockin</th>
                <th scope="col">Location</th>
                <th scope="col">Project</th>
                <th scope="col">Task</th>
                <th scope="col">Clockout</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $index=> $row)
                <tr>
                    <th scope="row">{{ $index + $data ->firstItem() }}</th>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->description }}</td>
                    <td>{{ $row->created_at->isoFormat('D MMM Y'); }}</td>
                    <td>{{ $row->clockin }}</td>
                    <td>{{ $row->location }}</td>
                    <td>{{ $row->project }}</td>
                    <td>{{ $row->task }}</td>
                    <td>{{ $row->clockout }}</td>
                    <td>
                      <a href="/tampilattendance/{{$row->id}}" class="btn btn-info">Edit</a>
                      <a href="/hapusattendance/{{$row->id}}" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
          {{ $data->links() }}
    </div>
  </div>
</div>
@endsection

@push('scripts')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
    <script>
        $('.delete').click(function() {
            var absen = $(this).attr('attendance_id');
            var dep = $(this).attr('department');
            swal({
                    title: "Are you sure?"
                    , text: "Once deleted, you will not be able to recover data from the attendance " + dep + " "
                    , icon: "warning"
                    , buttons: true
                    , dangerMode: true
                , })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/delete/" + absen + ""
                        swal("Your data from attendance " + dep + " has been deleted!", {
                            icon: "success"
                        , });
                    } else {
                        swal("Deletion of data from attendance " + dep + " has been cancelled!");
                    }
                });
        });

    </script>
    <script>
        @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
        @endif

    </script>
@endpush