@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3> Leads </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard_admin"> Home </a></li>
                            <li class="breadcrumb-item active"> Leads </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid support-ticket">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5>Add Leads Detail</h5>
                        </div>
                        <div class="card-body">

                            <div class="col-sm-12">
                                <div class="row g-3 align-items-center mt-2">
                                    <div class="col-auto">
                                        <a href="/tambahdataleads" class="btn btn-success"> <i
                                                class="nav-icon icon-plus"></i> Add Leads</a>
                                    </div>
                                    <div class="col-auto">
                                        <form action="/dataleads" method="GET">
                                            <input type="search" id="inputPassword6" name="search" class="form-control"
                                                aria-describedby="passwordHelpInline">
                                        </form>
                                    </div>
                                    <div class="col-auto">
                                        <a href="/exportpdf_admin" class="btn btn-info"> <i
                                                class="nav-icon fas fa-file-pdf"></i> Export PDF</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-success">
                                            <thead class="tbl-strip-thad-bdr">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Company Name</th>
                                                    <th scope="col">Mobile Phone</th>
                                                    <th scope="col">Created at</th>
                                                    <th scope="col">Next Follow Up</th>
                                                    <th scope="col">Lead Agent</th>
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
                                                        <td>{{ $row->leads_name }}</td>
                                                        <td>{{ $row->leads_email }}</td>
                                                        <td>{{ $row->office_phone }}</td>
                                                        <td>{{ $row->choose_agent }}</td>
                                                        <td>{{ $row->status }}</td>
                                                        <td>{{ $row->next_follow_up }}</td>
                                                        <td>{{ $row->company_name }}</td>
                                                        <td>{{ $row->website }}</td>
                                                        <td>{{ $row->mobile_phone }}</td>
                                                        <td>{{ $row->city }}</td>
                                                        <td>{{ $row->state }}</td>
                                                        <td>{{ $row->country }}</td>
                                                        <td>{{ $row->postal_code }}</td>
                                                        <td>{{ $row->address }}</td>
                                                        {{-- <td>{{ $row->created_at->format('D M Y') }}</td> --}}
                                                        <td>
                                                            <div class="dropleft">
                                                                <a class="btn btn-success task_view_more"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor" color="white"
                                                                        class="bi bi-three-dots-vertical"
                                                                        viewBox="1 1 16 16">
                                                                        <path
                                                                            d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                                                    </svg>
                                                                </a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item"
                                                                        href="/tampildataleads_admin/{{ $row->id }}">
                                                                        <i class="nav-icon icon-pencil-alt"></i> Update</a>
                                                                    <a class="dropdown-item delete" href="#"
                                                                        data-id="{{ $row->id }}"
                                                                        data-subject="{{ $row->leads_name }}"> <i
                                                                            class="nav-icon icon-trash"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="card-body">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination pagination-primary">{{ $data->links() }}
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
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
            var leadid = $(this).attr('data-id');
            var leads_name = $(this).attr('data-name');
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover data from the Leads Name " +
                        leads_name + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/delete/" + leadid + ""
                        swal("Your data from Ticket Subject " + leads_name + " has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("Deletion of data from Leads Name " + leads_name + " has been cancelled!");
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
