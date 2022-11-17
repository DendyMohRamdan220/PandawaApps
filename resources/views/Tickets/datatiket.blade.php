@extends('Layouts.layout')

@section('content')

@push('css')

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endpush

<div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Support Ticket</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Pages   </li>
                    <li class="breadcrumb-item active">Support Ticket</li>
                  </ol>
                </div>
                {{-- <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div> --}}
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
                                <div class="progress-bar bg-primary" role="progressbar" style="width:100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                <h6>Medium Ticket</h6>
                                <h4 class="total-num counter">{{ $totalmediumtiket }}</h4>
                              </div>
                            </div>
                            <div class="progress-showcase">
                              <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                <h6>High Ticket</h6>
                                <h4 class="total-num counter">{{ $totalhightiket }}</h4>
                              </div>
                            </div>
                            <div class="progress-showcase mt-4">
                              <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                <h6>Urgent</h6>
                                <h4 class="total-num counter">{{ $totalurgenttiket }}</h4>
                              </div>
                            </div>
                            <div class="progress-showcase mt-4">
                              <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                <h4 class="total-num counter">5600</h4>
                              </div>
                            </div>
                            <div class="progress-showcase mt-4">
                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                <h6>Cancle</h6>
                                <h4 class="total-num counter">2560</h4>
                              </div>
                            </div>
                            <div class="progress-showcase">
                              <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="row g-3 align-items-center mt-2">
                        <div class="col-auto">
                            <a href="/tambahtiket_admin" class="btn btn-success"> <i class="nav-icon icon-plus"></i> Add Ticket</a>
                        </div>
                        <div class="col-auto">
                            <form action="/tiket" method="GET">
                                <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
                            </form>
                            </div>
                            <div class="col-auto">
                                <a href="/exportpdf_admin" class="btn btn-info"> <i class="nav-icon fas fa-file-pdf"></i> Export PDF</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-striped table-success">
                                    <thead class="tbl-strip-thad-bdr">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Ticket Subject</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Others</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data as $view_tiket => $row)
                                            <tr>
                                                <th scope="row">{{ $view_tiket + $data->firstItem() }}</th>
                                                <td>{{ $row->ticket_subject }}</td>
                                                <td>{{ $row->description }}</td>
                                                <td>{{ $row->others }}</td>
                                                {{-- <td>{{ $row->created_at->format('D M Y') }}</td> --}}
                                                <td>
                                                    <div class="dropleft">
                                                        <a type="link" class="btn btn-success task_view_more" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" color="white" class="bi bi-three-dots-vertical" viewBox="1 1 16 16">
                                                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                                        </svg>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="/updatedatatiket_admin/{{ $row->id }}"> <i class="nav-icon icon-pencil-alt"></i> Update</a>
                                                            <a class="dropdown-item" href="#" data-id="{{ $row->id }}" data-subject="{{ $row->ticket_subject }}"> <i class="nav-icon icon-trash"></i> Delete</a>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
<script>
    $('.delete').click(function() {
        var tiketid = $(this).attr('data-id');
        var namatiket = $(this).attr('data-subject');
        swal({
                title: "Are you sure?"
                , text: "Once deleted, you will not be able to recover data from the Ticket Subject " + namatiket + " "
                , icon: "warning"
                , buttons: true
                , dangerMode: true
            , })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/deletetiket_admin/" + tiketid + ""
                    swal("Your data from Ticket Subject " + namatiket + " has been deleted!", {
                        icon: "success"
                    , });
                } else {
                    swal("Deletion of data from Ticket Subject " + namatiket + " has been cancelled!");
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

