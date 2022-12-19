@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3> Update Expense </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboardv3"> Home </a></li>
                            <li class="breadcrumb-item"> Finance </li>
                            <li class="breadcrumb-item"><a href="/dataexpenses_sales"> Expenses </a></li>
                            <li class="breadcrumb-item active"> Update Expenses </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content-wrapper">
                <div class="bg-dark-grey rounded b-shadow-4 create-inv">
                    <div class="px-lg-4 px-md-4 px-3 py-3">
                        <h4 class="mb-0 f-21 font-weight-normal text-capitalize"> Expense Details </h4>
                    </div>
                    <hr class="m-0 border-top-grey">
                    <form action="/updatedataexpenses_sales/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row px-lg-4 px-md-4 px-3 py-3">
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">
                                    <label for="label">Item Name</label>
                                    <input type="text" value="{{ $data->item_name }}" name="item_name" id="item_name"
                                        required="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="select_employee">Select
                                    Employee</label>
                                <div class="form-group mb-0">
                                    <select name="user_id" class="form-control select-picker" data-size="8" required="">
                                        <option value="">--</option>
                                        @foreach ($user as $items)
                                            @if ($items->level == 'Employee')
                                                <option value="{{ $items->id }}"
                                                    {{ old('user_id', $data->user_id) == $items->id ? 'selected' : null }}>
                                                    {{ $items->name }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="select_project">Select
                                    Project</label>
                                <div class="form-group mb-0">
                                    <select name="project_id" class="form-control select-picker"
                                        data-size="8" required="">
                                        <option value="">--</option>
                                            @foreach ( $project as $item )
                                            <option value="{{ $item->id }}"
                                                {{ old('project_id', $data->project_id) == $item->id ? 'selected' : null }}>
                                                {{ $item->projectname }}
                                            </option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">
                                    <label for="label">Purchase Date</label>
                                    <input type="date" value="{{ $data->purchase_date }}" name="purchase_date"
                                        id="purchase_date" required="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">
                                    <label for="label">Purchased From</label>
                                    <input type="text" value="{{ $data->purchase_from }}" name="purchase_from"
                                        id="purchase_from" required="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="currency">Currency</label>
                                <div class="form-group mb-0">
                                    <select name="currency" id="currency" class="form-control select-picker"
                                        data-size="8" required="">
                                        <option selected>{{ $data->currency }}</option>
                                        <option value="1">
                                            USD ($)
                                        </option>
                                        <option value="2">
                                            IDR (Rp)
                                        </option>
                                        <option value="3">
                                            GBP (£)
                                        </option>
                                        <option value="4">
                                            EUR (€)
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">
                                    <label class="f-14 text-dark-grey mb-12" data-label="true"
                                        for="price">Price</label>
                                    <input type="text" class="form-control height-35 f-14"
                                        value="{{ $data->price }}" name="price" id="price"
                                        required="" autocomplete="off">
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="submit"> Submit </button>
                                <a href="/dataexpenses_sales"class="btn btn-light">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
