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
                    <h1 class="m-0">Data Task</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Task</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="row g-3 align-items-center mt-2">
            <div class="col-auto">
                <a href="/tambahtask" class="btn btn-success"> <i class="nav-icon fas fa-plus"></i> Add Task</a>
            </div>
            <div class="col-auto">
                <form action="/task" method="GET">
                    <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
                </form>
            </div>
        </div>
        <div class="row mt-2">
            {{-- @if($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{$message}}
        </div>
        @endif --}}
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Task Name</th>
                    <th scope="col">Project</th>
                    <th scope="col">Startdate</th>
                    <th scope="col">Duedate</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($data as $index => $row)
                <tr>
                    <th scope="row">{{ $index + $data->firstItem() }}</th>
                    <td>{{ $row->taskname }}</td>
                    <td>{{ $row->project }}</td>
                    <td>{{ $row->startdate }}</td>
                    <td>{{ $row->duedate }}</td>
                    <td>{{ $row->status }}</td>
                    <td><a href="/tampildatatask/{{ $row->id }}" class="btn btn-info">Update</a>
                        <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-task="{{ $row->taskname }}">Delete</a>
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
        var idtask = $(this).attr('data-id');
        var nametask = $(this).attr('data-task');
        swal({
                title: "Are you sure?"
                , text: "Once deleted, you will not be able to recover data from the Task Name " + nametask + " "
                , icon: "warning"
                , buttons: true
                , dangerMode: true
            , })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/deletetask/" + idtask + ""
                    swal("Your data from Task Name " + nametask + " has been deleted!", {
                        icon: "success"
                    , });
                } else {
                    swal("Deletion of data from Task Name " + nametask + " has been cancelled!");
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

