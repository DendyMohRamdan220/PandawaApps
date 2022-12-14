@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="col-sm-6">
            <h3> Update Tasks </h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard_admin"> Home </a></li>
                <li class="breadcrumb-item"> Work </li>
                <li class="breadcrumb-item"><a href="/datatask_admin"> Tasks </a></li>
                <li class="breadcrumb-item active"> Update Tasks </li>
            </ol>
        </div>
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <form action="/updatedatatask_admin/{{ $data->id }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> Task Name </label>
                                <input class="form-control" type="text" name="taskname" required="" value="{{ $data->taskname }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Project</label>
                                <select class="form-control" name="project_id" required="">
                                    <option value="">--</option>
                                    @foreach ($projects as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('project_id', $data->project_id) == $item->id ? 'selected' : null }}>
                                            {{ $item->projectname }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Employee</label>
                                <select class="form-control" name="user_id" required="">
                                    <option value="">--</option>
                                    @foreach ($user as $item)
                                        @if ($item->level = 'Employee')
                                            <option value="{{ $item->id }}"
                                                {{ old('user_id', $data->user_id) == $item->id ? 'selected' : null }}>
                                                {{ $item->username }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Startdate</label>
                                <input class="form-control" type="date" name="startdate" required="" value="{{ $data->startdate }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Duedate</label>
                                <input class="form-control" type="date" name="duedate" required="" value="{{ $data->duedate }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Status Project </label>
                                <br>
                                <select class="form-select" name="status" required="">
                                    <option selected>{{ $data->status }}</option>
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
