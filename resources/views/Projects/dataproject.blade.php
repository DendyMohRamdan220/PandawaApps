@extends('layouts.layout')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3> Projects </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard_admin"> Home </a></li>
                            <li class="breadcrumb-item"> Work </li>
                            <li class="breadcrumb-item active"> Projects </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header row">
                    <div class="col-auto">
                        <a href="/tambahdataproject_admin" class="btn btn-success">
                            <i class="nav-icon fas icon-plus"></i> Add Project</a>
                    </div>
                    <div class="col-auto">
                        <form action="" method="GET">
                            <input type="search" name="keyword" class="form-control"
                                aria-describedby="passwordHelpInline" placeholder="Search...">
                        </form>
                    </div>
                    <div class="col-auto">
                        <a href="/exportpdfproject_admin" class="btn btn-info"> <i class="nav-icon fas fa-file-pdf"></i>
                            Export PDF </a>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="table-responsive">
                    <table class="table table-striped bg-primary">
                        <thead class="tbl-strip-thad-bdr">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Project Name</th>
                                <th scope="col">Employee</th>
                                <th scope="col">Deadline</th>
                                <th scope="col">Client</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $dataproject_admin => $row)
                            <tr>
                                <th scope="row">{{ $dataproject_admin + $data->firstItem() }}</th>
                                <td>{{ $row->projectname }}</td>
                                <td>{{ $row->user->name }}</td>
                                <td>{{ $row->deadline }}</td>
                                <td>{{ $row->user_id1 }}</td>
                                <td>{{ $row->status }}</td>
                                <td>
                                    <a class="btn btn-info" href="/editdataproject_admin/{{ $row->id }}">
                                        <i class="nav-icon icon-pencil-alt"></i></a>
                                    <a class="btn btn-danger delete" href="#" data-id="{{ $row->id }}"
                                        data-project="{{ $row->projectname }}">
                                        <i class="nav-icon icon-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="card-body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-primary">{{ $data->withQueryString()->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.delete').click(function() {
            var idproject = $(this).attr('data-id');
            var projectname = $(this).attr('data-project');
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover data " +
                        projectname + " from Project Name ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletedataproject_admin/" + idproject + ""
                        swal("Your data " + projectname + " from Project Name has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("Deletion of data " + projectname + " from Project Name has been cancelled!");
                    }
                });
        });
    </script>
    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif
    </script>
@endpush
