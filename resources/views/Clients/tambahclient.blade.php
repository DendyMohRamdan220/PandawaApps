@extends('Layouts.layout')

@section('content')
<div class="page-body">
<div class="content-wrapper">
  <div class="col-sm-6">
    <h3> Add Client </h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard_admin"> Home </a></li>
        <li class="breadcrumb-item"><a href="/dataclient_admin"> Client </a></li>
        <li class="breadcrumb-item active"> Add Client </li>
    </ol>
</div>
  <!-- /.content-header -->

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <form action="/insertdataclient_admin" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" name="Ussername" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="text" name="Password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="text" name="Address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mobile</label>
                <input type="text" name="Mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status</label>
                <input type="text" name="Status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Gender</label>
                <br>
                <select class="form-select" name="Gender" aria-label="Default select example">
                    <option selected>Choose :</option>
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








