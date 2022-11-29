@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3> Client </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboardv1"> Home </a></li>
                            <li class="breadcrumb-item active"> Client </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header row">
                    <div class="col-auto">
                        <a href="/tambahdataclient_admin" class="btn btn-success"> <i class="nav-icon icon-plus"></i> Add
                            Client</a>
                    </div>
                    <div class="col-auto">
                        <form action="/dataclient_admin" method="GET">
                            <input type="search" id="inputPassword6" name="search" class="form-control"
                                aria-describedby="passwordHelpInline">
                        </form>
                    </div>
                    <div class="col-auto">
                        <a href="/exportpdf_admin" class="btn btn-info"> <i class="nav-icon fas fa-file-pdf"></i> Export
                            PDF</a>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="table-responsive">
                    <table class="table table-striped bg-primary">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Ussername</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Address</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Status</th>
                                <th scope="col">Gender</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($data as $index => $row)
                            <tr>
                                <th scope="row">{{ $index + $data->firstItem() }}</th>
                                <td>{{ $row->Ussername }}</td>
                                <td>{{ $row->Email }}</td>
                                <td>{{ $row->Password }}</td>
                                <td>{{ $row->Address }}</td>
                                <td>{{ $row->Mobile }}</td>
                                <td>{{ $row->Status }}</td>
                                <td>{{ $row->Gender }}</td>
                                <td>
                                    <a class="btn btn-info" href="/editdataclient_admin/{{ $row->id }}">
                                        <i class="nav-icon icon-pencil-alt"></i></a>
                                    <a class="btn btn-danger delete" href="#" data-id="{{ $row->id }}"
                                        data-client="{{ $row->Ussername }}">
                                        <i class="nav-icon icon-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data->links() }}
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
    </body>
    <script>
        $('.delete').click(function() {
            var clientid = $(this).attr('data-id');
            var ussername = $(this).attr('data-name');
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover data from the client Name " +
                        ussername + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletedataclient_admin/" + clientid + ""
                        swal("Your data from Ticket Subject " + ussername + " has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("Deletion of data from Leads Name " + ussername + " has been cancelled!");
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
