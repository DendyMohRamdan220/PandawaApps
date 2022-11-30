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
                                    <div class="form-group">
                                        <label for="exampleInputCity1">Nama Lengkap</label>
                                        <input name="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" id="exampleInputCity1"
                                            placeholder="Nama Lengkap" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputCity2">Email</label>
                                        <input name="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" id="exampleInputCity2"
                                            placeholder="Email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Password</label>
                                        <input name="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            id="exampleInputPassword4" placeholder="Password" value="{{ old('password') }}">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Level</label>
                                        <br>
                                        <select class="form-select" name="level" aria-label="Default select example">
                                            <option selected>Choose:</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Employee</option>
                                            <option value="3">Client</option>
                                            <option value="4">Seles</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>File upload</label>
                                        <input type="file" name="file"
                                            class="file-upload-default  @error('file') is-invalid @enderror">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-primary" disabled
                                                placeholder="Upload Image">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-gradient-primary"
                                                    type="button">Upload</button>
                                            </span>
                                        </div>
                                        @error('file')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
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
