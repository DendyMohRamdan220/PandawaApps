@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="edit-profile">
                <form action="/updatedatauserprofile" method="POST">
                    @method('patch')
                    @csrf
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4 class="card-title mb-0">My Profile</h4>
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
                                    <div class="row mb-2">
                                        <div class="profile-title">
                                            <div class="media">
                                                <img class="img-70 rounded-circle" alt=""
                                                    src="{{ auth()->user()->file }}">
                                                <input type="file" class="file-upload-default" name="file">
                                                <input type="hidden" name="pathFile">
                                                @error('file')
                                                    <p class="text-danger pt-1"><small> {{ $message }}</small></p>
                                                @enderror
                                                <div class="media-body">
                                                    <h3 class="mb-1 f-20 txt-primary">{{ auth()->user()->name }}</h3>
                                                    <p class="f-12">{{ auth()->user()->level }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror" type="password"
                                            name="password" required="" id="pass">
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4 class="card-title mb-0">Edit Profile</h4>
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
                                        <div class="col-sm-6 col-md-3">
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input class="form-control @error('name') is-invalid @enderror"
                                                    type="text" placeholder="Name" value="{{ $user->name }}">
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email address</label>
                                                <input class="form-control @error('email') is-invalid @enderror"
                                                    type="email" placeholder="Email" value="{{ $user->email }}">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button class="btn btn-primary" type="submit">Update Profile</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
