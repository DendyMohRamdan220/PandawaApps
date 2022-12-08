@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="col-sm-6">
            <h3> Add Projects </h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard_admin"> Home </a></li>
                <li class="breadcrumb-item"> Work </li>
                <li class="breadcrumb-item"><a href="/dataproject_admin"> Projects </a></li>
                <li class="breadcrumb-item active"> Add Projects </li>
            </ol>
        </div>
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <form action="/insertdataproject_admin" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> Project Name </label>
                                <input type="text" name="projectname" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> Employee </label>
                                <select name="user_id" class="form-control">
                                    <option value="">--</option>
                                    @foreach ($user as $item)
                                        @if ($item->level == 'Employee')
                                            <option value="{{ $item->id }}" {{ old('user_id') == $item->id }}>
                                                {{ $item->username }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> Deadline </label>
                                <input type="date" name="deadline" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> Client </label>
                                <select name="user_id" class="form-control">
                                    <option value="">--</option>
                                    @foreach ($user as $item)
                                        @if ($item->level == 'Client')
                                            <option value="{{ $item->id }}" {{ old('user_id') == $item->id }}>
                                                {{ $item->username }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label"> Status Project </label>
                                <br>
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option selected> Status </option>
                                    <option value="1"> Progres </option>
                                    <option value="2"> Pending </option>
                                    <option value="3"> Done </option>
                                    <option value="4"> Cancel </option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary"> Submit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
