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
                                        <label for="exampleInputCity1"> Name </label>
                                        <input name="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" id="exampleInputCity1"
                                            placeholder="Enter your full name" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputCity2"> Email </label>
                                        <input name="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" id="exampleInputCity2"
                                            placeholder="Enter your email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Password</label>
                                        <div class="input-group">
                                            <input class="form-control @error('password') is-invalid @enderror"
                                                type="password" name="password" palaceholder="********" id="pass"
                                                value="{{ old('password') }}">
                                            <div class="input-group-append">

                                                <!-- kita pasang onclick untuk merubah icon buka/tutup mata setiap diklik  -->
                                                <span id="mybutton" onclick="change()" class="input-group-text">

                                                    <!-- icon mata bawaan bootstrap  -->
                                                    <svg width="2em" height="2em" viewBox="0 0 16 16"
                                                        class="bi bi-eye-fill" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                        <path fill-rule="evenodd"
                                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                    </svg>
                                                </span>
                                            </div>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputCity3"> Address </label>
                                        <input name="address" type="text"
                                            class="form-control @error('address') is-invalid @enderror"
                                            id="exampleInputCity2" placeholder="Enter your address" value="{{ old('address') }}">
                                        @error('address')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputCity4"> Mobile Phone </label>
                                        <input name="mobile" type="Tel"
                                            class="form-control @error('mobile') is-invalid @enderror"
                                            id="exampleInputCity2" placeholder="Enter your mobile phone" value="{{ old('mobile') }}">
                                        @error('mobile')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Gender </label>
                                        <br>
                                        <select class="form-select @error('gender') is-invalid @enderror" name="gender">
                                            <option value="{{ old('gender') }}"> -Select- </option>
                                            <option value="1">Laki-laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                        @error('gender')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control form-control-lg" name="level"
                                            value="Client" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label> Image upload </label>
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
                                    <div class="card-footer text-end">
                                        <button class="btn btn-primary" type="submit"> Submit </button>
                                        <a href="/dataclient_admin"class="btn btn-light">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script>
        // membuat fungsi change
        function change() {

            // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password
            var x = document.getElementById('pass')
                .type;

            //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
            if (x == 'password') {

                //ubah form input password menjadi text
                document.getElementById('pass')
                    .type = 'text';

                //ubah icon mata terbuka menjadi tertutup
                document.getElementById('mybutton')
                    .innerHTML = `<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                                    <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                                    <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                                    </svg>`;
            } else {

                //ubah form input password menjadi text
                document.getElementById('pass')
                    .type = 'password';

                //ubah icon mata terbuka menjadi tertutup
                document.getElementById('mybutton')
                    .innerHTML = `<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                    <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                                    </svg>`;
            }
        }
    </script>
@endsection
