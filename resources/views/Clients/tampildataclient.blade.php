@extends('layout.Client')

@section('content')

@push('css')
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

<div class="content-wrapper">
  <!-- /.content-header -->

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <form action="/updatedataclient/{{ $data->id }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ussername</label>
                <input type="text" name="ussername" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->nama}}">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->employee}}">
              </div>


              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="text" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->duedate}}">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><Address></Address></label>
                <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->client}}">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mobile</label>
                <input type="text" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->progress}}">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status</label>
                <input type="text" name="status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->status}}">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Gender</label>
                <br>
                <select class="form-select" name="gender" aria-label="Default select example">
                    <option selected>{{ $data->client }}</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection








