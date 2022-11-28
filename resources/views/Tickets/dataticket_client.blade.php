@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Support Ticket</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">Pages </li>
                            <li class="breadcrumb-item active">Support Ticket</li>
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
                            <h5>Ticket List</h5><span>List of ticket opend by customers</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-4 col-sm-6">
                                    <div class="card ecommerce-widget pro-gress">
                                        <div class="card-body support-ticket-font">
                                            <div class="row">
                                                <div class="col-5">
                                                    <h6>Total Ticket</h6>
                                                    <h4 class="total-num counter">{{ $totaltiket }}</h4>
                                                </div>
                                            </div>
                                            <div class="progress-showcase">
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width:100%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="card ecommerce-widget pro-gress">
                                        <div class="card-body support-ticket-font">
                                            <div class="row">
                                                <div class="col-5">
                                                    <h6>Order Ticket</h6>
                                                    <h4 class="total-num counter">{{ $totalordertiket }}</h4>
                                                </div>
                                            </div>
                                            <div class="progress-showcase">
                                                <div class="progress">
                                                    <div class="progress-bar bg-secondary" role="progressbar"
                                                        style="width: 70%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="card ecommerce-widget pro-gress">
                                        <div class="card-body support-ticket-font">
                                            <div class="row">
                                                <div class="col-5">
                                                    <h6>Progress</h6>
                                                    <h4 class="total-num counter">{{ $totalprogrestiket }}</h4>
                                                </div>
                                            </div>
                                            <div class="progress-showcase mt-4">
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 70%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="card ecommerce-widget pro-gress">
                                        <div class="card-body support-ticket-font">
                                            <div class="row">
                                                <div class="col-5">
                                                    <h6>Pending</h6>
                                                    <h4 class="total-num counter">{{ $totalpendingtiket }}</h4>
                                                </div>
                                            </div>
                                            <div class="progress-showcase mt-4">
                                                <div class="progress">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 70%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="card ecommerce-widget pro-gress">
                                        <div class="card-body support-ticket-font">
                                            <div class="row">
                                                <div class="col-5">
                                                    <h6>Done</h6>
                                                    <h4 class="total-num counter">{{ $totaldonetiket }}</h4>
                                                </div>
                                            </div>
                                            <div class="progress-showcase mt-4">
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 70%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="card ecommerce-widget pro-gress">
                                        <div class="card-body support-ticket-font">
                                            <div class="row">
                                                <div class="col-5">
                                                    <h6>Cancel</h6>
                                                    <h4 class="total-num counter">{{ $totalcanceltiket }}</h4>
                                                </div>
                                            </div>
                                            <div class="progress-showcase">
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 70%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="row g-3 align-items-center mt-2">
                                    <div class="col-auto">
                                        <a href="/tambahdataticket_client" class="btn btn-success"> <i
                                                class="nav-icon icon-plus"></i> Add Ticket</a>
                                    </div>
                                    <div class="col-auto">
                                        <form action="/dataticket_client" method="GET">
                                            <input type="search" id="inputPassword6" name="search"
                                                class="form-control" aria-describedby="passwordHelpInline">
                                        </form>
                                    </div>
                                    <div class="col-auto">
                                        <a href="/exportpdf_client" class="btn btn-info"> <i
                                                class="nav-icon fas fa-file-pdf"></i> Export PDF</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped bg-primary">
                                        <thead class="tbl-strip-thad-bdr">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Ticket Subject</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($data as $dataticket_client => $row)
                                                <tr>
                                                    <th scope="row">{{ $dataticket_client + $data->firstItem() }}
                                                    </th>
                                                    <td>{{ $row->ticket_subject }}</td>
                                                    <td>{{ $row->description }}</td>
                                                    <td>{{ $row->status }}</td>
                                                    {{-- <td>{{ $row->created_at->format('D M Y') }}</td> --}}
                                                    <td>
                                                        <a class="btn btn-info"
                                                            href="/editdataticket_client/{{ $row->id }}">
                                                            <i class="nav-icon icon-pencil-alt"></i></a>
                                                        <a class="btn btn-danger delete" href="#"
                                                            data-id="{{ $row->id }}"
                                                            data-name="{{ $row->ticket_subject }}">
                                                            <i class="nav-icon icon-trash"></i></a>
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
        <!-- Container-fluid Ends-->
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
            var tiketid = $(this).attr('data-id');
            var namatiket = $(this).attr('data-subject');
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover data from the Ticket Subject " +
                        namatiket + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletedataticket_client/" + tiketid + ""
                        swal("Your data from Ticket Subject " + namatiket + " has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("Deletion of data from Ticket Subject " + namatiket + " has been cancelled!");
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
