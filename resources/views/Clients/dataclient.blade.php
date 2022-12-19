@extends('Layouts.layout')

@section('content')

    @push('css')
    <!-- Plugins css start-->
        <!-- Bootstrap CSS -->
    @endpush

    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3> Client </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard_admin"> Home </a></li>
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
                        <a href="/tambahdataclient_admin" class="btn btn-success"> <i class="nav-icon icon-plus"></i>
                            Add Client </a>
                    </div>
                    <div class="col-auto">
                        <form action="" method="GET">
                            <input type="search" name="keyword" class="form-control"
                                aria-describedby="passwordHelpInline" placeholder="Search Name...">
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="table-responsive">
                    <table class="table table-striped bg-primary">
                        <thead class="tbl-strip-thad-bdr">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile Phone</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Created</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $datauser_client => $row)
                            @if ( $row->level == 'Client' )
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->mobile }}</td>
                                    <td>
                                        @empty($row->file)
                                            <span class="badge badge-danger">Tidak ada</span>
                                        @else
                                            <img src="{{ $row->file }}" width="50px" height="50px" alt="file">
                                        @endempty
                                    </td>
                                    <td>
                                        @if (Cache::has('user-is-online-' . $row->id))
                                            <span class="text-white">Online</span>
                                        @else
                                            <span class="text-secondary">Offline</span>
                                        @endif
                                    </td>
                                    <td>{{ $row->created_at->isoFormat('D MMM Y') }}</td>
                                    <td>
                                        <a class="btn btn-info" href="/editdataclient_admin/{{ $row->id }}">
                                            <i class="nav-icon icon-pencil-alt"></i></a>
                                        <a class="btn btn-danger delete" href="#" data-id="{{ $row->id }}"
                                            data-client="{{ $row->name }}">
                                            <i class="nav-icon icon-trash"></i></a>
                                    </td>
                                </tr>
                                @endif
                        @endforeach
                    </tbody>
                </table>
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
        var username = $(this).attr('data-client');
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover data from the client Name " +
                    username + " ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/deletedataclient_admin/" + clientid + ""
                    swal("Your data from Ticket Subject " + username + " has been deleted!", {
                        icon: "success",
                    });
                } else {
                    swal("Deletion of data from Leads Name " + username + " has been cancelled!");
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
