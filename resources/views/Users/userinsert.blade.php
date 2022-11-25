@extends('Layouts.layout')

@section('content')
        <div class="page-body">
            <div class="col-sm-6">
                <h3> Add Users </h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard_admin"> Home </a></li>
                    <li class="breadcrumb-item"><a href="/datauser_admin"> Users </a></li>
                    <li class="breadcrumb-item active"> Add Users </li>
                </ol>
            </div>
            <div class="row justify-content-center">
                <div class="col-9">
                    <div class="card">
                        <div class="card-body">
                            <form action="/insertdatauser_admin" method="post" enctype="multipart/form-data">
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
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
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
@endpush
