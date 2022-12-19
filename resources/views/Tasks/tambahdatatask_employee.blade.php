@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="col-sm-6">
            <h3> Add Tasks </h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboardv1"> Home </a></li>
                <li class="breadcrumb-item"> Work </li>
                <li class="breadcrumb-item"><a href="/datatask_employee"> Tasks </a></li>
                <li class="breadcrumb-item active"> Add Tasks </li>
            </ol>
        </div>
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <form action="/insertdatatask_employee" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> Task Name </label>
                                <input class="form-control" type="text" name="taskname" required="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> Project </label>
                                <select class="form-control" name="project_id" required="">
                                    <option value="">--</option>
                                    @foreach ($projects as $item)
                                        <option value="{{ $item->id }}" {{ old('project_id') == $item->id }}>
                                            {{ $item->projectname }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> Employee </label>
                                <select class="form-control" name="user_id"  required="">
                                    <option value="">--</option>
                                    @foreach ($user as $items)
                                        @if ($items->level == 'Employee')
                                            <option value="{{ $item->id }}" {{ old('user_id') == $items->id ? 'selected' : null }}>
                                                {{ $items->name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label"> Startdate </label>
                                <input class="form-control" type="date" name="startdate" required="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> Duedate </label>
                                <input class="form-control" type="date" name="duedate" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-lg" type="hidden" name="status" value="Order"
                                    readonly>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="submit"> Submit </button>
                                <a href="/datatask_employee"class="btn btn-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
