@extends('Layouts.layout')

@section('content')
<div class="page-body">
<div class="content-wrapper">
  <!-- /.content-header -->

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <form action="/updatedataclient_admin/{{ $data->id }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ussername</label>
                <input type="text" name="Ussername" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->Ussername}}">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->Email}}">
              </div>


              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="text" name="Password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->Password}}">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="text" name="Address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->Address}}">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mobile</label>
                <input type="text" name="Mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->Mobile}}">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status</label>
                <input type="text" name="Status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->Status}}">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Gender</label>
                <br>
                <select class="form-select" name="Gender" aria-label="Default select example">
                    <option selected>{{ $data->Gender }}</option>
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
</div>
@endsection








