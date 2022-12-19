@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3> Update Payments </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboarv3"> Home </a></li>
                            <li class="breadcrumb-item"> Finance </li>
                            <li class="breadcrumb-item"><a href="/datapayments_sales"> Payments </a></li>
                            <li class="breadcrumb-item active"> Update Payments </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content-wrapper">
                <div class="bg-dark-grey rounded b-shadow-4 create-inv">
                    <div class="px-lg-4 px-md-4 px-3 py-3">
                        <h4 class="mb-0 f-21 font-weight-normal text-capitalize"> Payments Details </h4>
                    </div>
                    <hr class="m-0 border-top-grey">
                    <form action="/updatedatapayments_sales/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row px-lg-4 px-md-4 px-3 py-3">
                            <div class="col-lg-4 col-md-6">
                                <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="select_project">Select
                                    Project</label>
                                <div class="form-group mb-0">
                                    <select name="project_id" class="form-control select-picker" data-size="8" required="">
                                        <option value="">--</option>
                                        @foreach ($project as $item)
                                            <option value="{{ $item->id }}"
                                                {{ old('project_id', $data->project_id) == $item->id ? 'selected' : null }}>
                                                {{ $item->projectname }}
                                            </option>
                                        @endforeach
                                    </select>
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
                                    <label for="label">Paid On</label>
                                    <input type="date" value="{{ $data->paid_on }}" name="paid_on" id="paid_on"
                                        required="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">
                                    <label for="total">Total</label>
                                    <input type="text" value="{{ $data->total }}" name="total" id="total"
                                        required="" class="form-control" />
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="submit"> Submit </button>
                                <a href="/datapayments_sales"class="btn btn-light">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
