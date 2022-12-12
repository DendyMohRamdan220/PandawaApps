@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="col-sm-6">
            <h3> Update Projects </h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard_admin"> Home </a></li>
                <li class="breadcrumb-item"> Work </li>
                <li class="breadcrumb-item"><a href="/dataproject_admin"> Projects </a></li>
                <li class="breadcrumb-item active"> Update Projects </li>
            </ol>
        </div>
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <form action="/updatedataproject_admin/{{ $data->id }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">projectname</label>
                                <input type="text" name="projectname" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" value="{{ $data->projectname }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Employee</label>
                                <select class="form-control" name="user_id" required="">
                                    <option value="{{ $data->user_id }}">{{ $data->user->username }}</option>
                                    @foreach ($user as $item)
                                        @if ($item->level == 'Employee')
                                            <option value="{{ $item->id }}"
                                                {{ old('user_id') == $item->id ? 'selected' : null }}>
                                                {{ $item->username }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="deadline" class="form-label">Deadline</label>
                                <input class="form-control" type="date" name="deadline" id="deadline" required=""
                                    value="{{ $data->deadline }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> Client </label>
                                <select class="form-control" name="user_id1" required="">
                                    <option value="{{ $data->user_id1 }}">{{ $data->user_id1 }}</option>
                                    @foreach ($user as $item)
                                        @if ($item->level == 'Client')
                                            <option value="{{ $item->username }}"
                                                {{ old('user_id1') == $item->id ? 'selected' : null }}>
                                                {{ $item->username }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Status Project</label>
                                <br>
                                <select class="form-select" name="status" required="">
                                    <option selected>{{ $data->status }}</option>
                                    <option value="1">Progres</option>
                                    <option value="2">Pending</option>
                                    <option value="3">Done</option>
                                    <option value="4">Cancel</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
