@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Product</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">Pages </li>
                            <li class="breadcrumb-item active">Product</li>
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
                            <h5>Add Product Detail</h5>
                        </div>
                        <div class="card-body">

                            <div class="col-sm-12">
                                <div class="row g-3 align-items-center mt-2">
                                    <div class="col-auto">
                                        <a href="/tambahdataproduk_admin" class="btn btn-success"> <i
                                                class="nav-icon icon-plus"></i> Add Product</a>
                                    </div>
                                    <div class="col-auto">
                                        <form action="/dataproduk_admin" method="GET">
                                            <input type="search" id="inputPassword6" name="search" class="form-control"
                                                aria-describedby="passwordHelpInline">
                                        </form>
                                    </div>
                                    <div class="col-auto">
                                        <a href="/exportpdfproduk_admin" class="btn btn-info"> <i
                                                class="nav-icon fas fa-file-pdf"></i> Export PDF</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-success">
                                            <thead class="tbl-strip-thad-bdr">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Product Name</th>
                                                    {{-- <th scope="col">Product Image</th> --}}
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($data as $dataproduk_admin => $row)
                                                    <tr>
                                                        <th scope="row">{{ $dataproduk_admin + $data->firstItem() }}</th>
                                                        <td>{{ $row->name }}</td>
                                                        {{-- <td>{{ $row->file_upload }}</td> --}}
                                                        <td>{{ $row->price }}</td>
                                                        {{-- <td>{{ $row->created_at->format('D M Y') }}</td> --}}
                                                        <td>
                                                            <a class="btn btn-info"
                                                                href="/editdataproduk_admin/{{ $row->id }}">
                                                                <i class="nav-icon icon-pencil-alt"></i></a>
                                                            <a class="btn btn-danger delete" href="#"
                                                                data-id="{{ $row->id }}"
                                                                data-name="{{ $row->name }}">
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
            var produkid = $(this).attr('data-id');
            var produkname = $(this).attr('data-subject');
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover data from the Ticket Subject " +
                        produkname + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletedataproduk_admin/" + produkid + ""
                        swal("Your data from Ticket Subject " + produkname + " has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("Deletion of data from Ticket Subject " + produkname + " has been cancelled!");
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
