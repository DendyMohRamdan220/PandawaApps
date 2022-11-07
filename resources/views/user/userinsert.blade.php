@extends('layout.Client')

@section('content')
<body>
    <h1 class="text-center mb-4">Add Data User</h1>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <form action="/insertdatauser" method="post" enctype="multipart/form-data">
                            @csrf
                            {{-- <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control"  @error('name') is-invalid @enderror id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{ old('name') }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" @error('email') is-invalid @enderror id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" name="password" class="form-control" @error('password') is-invalid @enderror id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{ old('password') }}">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Level User</label>
                                <br>
                                <select class="form-select" name="level" aria-label="Default select example" @error('level') is-invalid @enderror value="{{ old('level') }}">
                                @error('level')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                    <option selected></option>
                                    <option value="Admin">Admin</option>
                                    <option value="Employee">Employee</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Client">Client</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>File upload</label>
                                <input type="file" name="file" class="file-upload-default  @error('file') is-invalid @enderror">
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
                            </div>  --}}
                            <div class="form-group">
                                <label for="exampleInputCity1">Nama Lengkap</label>
                                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="exampleInputCity1" placeholder="Nama Lengkap" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCity2">Email</label>
                                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="exampleInputCity2" placeholder="Email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Password</label>
                                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="exampleInputPassword4" placeholder="Password" value="{{ old('password') }}">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control form-control-lg" name="level" value="Employee" readonly>
                            </div>

                            <div class="form-group">
                                <label>File upload</label>
                                <input type="file" name="file" class="file-upload-default  @error('file') is-invalid @enderror">
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

@endsection
