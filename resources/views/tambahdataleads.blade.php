@extends('layout.Client')

@section('content')

@push('css')
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

<div class="content-wrapper">
  <!-- /.content-header -->
  <h4 class="mb-0 p-20 f-21 font-weight-normal text-capitalize border-bottom-grey">
    Lead Details</h4>

  <div class="container">
    <div class="row p-20">
      <div class="col-sm-12">
            <form action="/insertdatatask" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="col-lg-4 col-md-6">
                <div class="form-group my-3">
                    <label for="exampleInputEmail1" class="form-label">Lead Name</label>
                    <input type="text" name="taskname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="form-group my-3">
                    <label for="exampleInputEmail1" class="form-label">Lead Email</label>
                    <input type="text" name="taskname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="client_emailHelp" class="form-text text-muted">Email will be used to send proposals.</small>
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="form-group my-3">
                    <label for="exampleInputEmail1" class="form-label">Lead Name</label>
                    <input type="text" name="taskname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="form-group my-3">
                    <label for="exampleInputEmail1" class="form-label">Lead Name</label>
                    <input type="text" name="taskname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="form-group my-3">
                    <label for="exampleInputEmail1" class="form-label">Lead Name</label>
                    <input type="text" name="taskname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="form-group my-3">
                    <label for="exampleInputEmail1" class="form-label">Lead Name</label>
                    <input type="text" name="taskname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="form-group my-3">
                    <label for="exampleInputEmail1" class="form-label">Lead Name</label>
                    <input type="text" name="taskname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <label for="exampleInputEmail1" class="form-label">Status</label>
                <input type="text" name="status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
  </div>
</div>
@endsection