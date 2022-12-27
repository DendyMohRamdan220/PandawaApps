@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3> Edit Profile </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"> Home </a></li>
                            <li class="breadcrumb-item"> Settings </li>
                            <li class="breadcrumb-item active"> Edit Profile </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="edit-profile">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4 class="card-title mb-0"> My Profile </h4>
                                <div class="card-options">
                                    <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse">
                                        <i class="fe fe-chevron-up"></i>
                                    </a>
                                    <a class="card-options-remove" href="#" data-bs-toggle="card-remove">
                                        <i class="fe fe-x"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="/updateUser_myprofile/{{ auth::user()->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-2">
                                        <div class="profile-title">
                                            <div class="media">
                                                @if (auth()->user()->file)
                                                    <img src="{{ auth()->user()->file }}" class="img-70 rounded-circle"
                                                        alt="">
                                                @elseif (auth()->user()->gender == 'Laki-laki')
                                                    <img src="{{ asset('template/assets/images/dashboard/1.png') }}"
                                                        class="img-70 rounded-circle" alt="">
                                                @elseif (auth()->user()->gender == 'Perempuan')
                                                    <img src="{{ asset('template/assets/images/dashboard/2.png') }}"
                                                        class="img-70 rounded-circle" alt="">
                                                @endif
                                                <div class="media-body">
                                                    <h3 class="mb-1 f-20 txt-primary">{{ auth()->user()->name }}</h3>
                                                    <p class="f-12">{{ auth()->user()->level }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="email"> Email-Address </label>
                                        <input class="form-control" type="email" name="email" id="email"
                                            required="" value="{{ auth::user()->email }}" placeholder="Enter new email">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password"> Password </label>
                                        <div class="input-group">
                                            <input class="form-control" type="password" name="password" required=""
                                                placeholder="Enter new password" value="" id="pass">
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
                                        <label class="form-label" for="file"> Image Upload </label>
                                        <input type="file" class="file-upload-default" name="file" id="file">
                                        <input type="hidden" name="pathFile" value="{{ auth::user()->file }}">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="{{ auth()->user()->file }}">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button"> Upload
                                                </button>
                                            </span>
                                        </div>
                                        @error('file')
                                            <p class="text-danger pt-1"><small> {{ $message }}</small></p>
                                        @enderror
                                    </div>
                                    <div class="form-footer">
                                        <button class="btn btn-primary btn-block"> Save </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <form class="card" action="/updateUser_editprofile/{{ auth::user()->id }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-header pb-0">
                                <h4 class="card-title mb-0"> Edit Profile </h4>
                                <div class="card-options">
                                    <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse">
                                        <i class="fe fe-chevron-up"></i>
                                    </a>
                                    <a class="card-options-remove" href="#" data-bs-toggle="card-remove">
                                        <i class="fe fe-x"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="mb-3">
                                            <label class="form-label" for="name"> Name </label>
                                            <input class="form-control @error('name') is-invalid @enderror" type="text"
                                                name="name" id="name" value="{{ auth::user()->name }}"
                                                placeholder="Enter new full name">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label" for="mobile"> Mobile Phone </label>
                                            <input class="form-control @error('mobile') is-invalid @enderror"
                                                type="tel" name="mobile" id="mobile"
                                                value="{{ auth::user()->mobile }}" placeholder="Enter new mobile">
                                            @error('mobile')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label" for="gender"> Gender </label>
                                            <select class="form-control btn-square @error('gender') is-invalid @enderror"
                                                name="gender" id="gender">
                                                <option value="{{ auth::user()->gender }}">
                                                    {{ auth::user()->gender }}
                                                </option>
                                                <option value="1">Laki-laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                            @error('gender')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="address"> Address </label>
                                            <input class="form-control @error('address') is-invalid @enderror"
                                                type="text" name="address" id="address"
                                                value="{{ auth::user()->address }}" placeholder="Enter new address">
                                            @error('address')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="submit"> Update Profile </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
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
