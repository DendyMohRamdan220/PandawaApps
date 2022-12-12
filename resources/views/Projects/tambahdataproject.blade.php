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
                                <input class="form-control" type="text" name="projectname" required=""
                                    value="{{ old('projectname') }}" placeholder="Enter a new project name">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">
                                    Employee </label>
                                <select class="form-control" name="user_id" required="">
                                    <option value="">--</option>
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
                                <label for="exampleInputEmail1" class="form-label"> Deadline </label>
                                <input class="form-control" type="date" name="deadline" required="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> Client </label>
                                <select class="form-control" name="user_id1" required="">
                                    <option value="">--</option>
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
                                <input class="form-control form-control-lg" type="hidden" name="status" value="Order"
                                    readonly>
                            </div>
                            <button type="submit" class="btn btn-primary"> Submit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
