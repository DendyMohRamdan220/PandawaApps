@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="card">
            <div class="content-wrapper">
                <div class="bg-dark-grey rounded b-shadow-4 create-inv">
                    <div class="px-lg-4 px-md-4 px-3 py-3">
                        <h4 class="mb-0 f-21 font-weight-normal text-capitalize"> Add Expense </h4>
                    </div>
                    <hr class="m-0 border-top-grey">
                    <form action="/insertdataexpenses_admin" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row px-lg-4 px-md-4 px-3 py-3">
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">

                                    <label for="label">Item Name</label>
                                    <input type="text" value="" name="item_name" id="item_name"
                                        class="form-control" />

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="currency">Currency</label>
                                <div class="form-group mb-0">
                                    <select name="currency" id="currency" class="form-control select-picker"
                                        data-size="8">
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
                                        for="unit_price">Price</label>
                                    <input type="text" class="form-control height-35 f-14" value=""
                                        name="unit_price" id="unit_price" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">

                                    <label for="label">Purchase Date</label>
                                    <input type="date" value="" name="purchase_date" id="purchase_date"
                                        class="form-control" />

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="select_employee">Select
                                    Employee</label>
                                <div class="form-group mb-0">
                                    <select name="select_employee" id="select_employee" class="form-control select-picker"
                                        data-size="8">
                                        <option value="">--</option>
                                        <option value="1">
                                            A</option>
                                        <option value="2">
                                            B</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="select_project">Select
                                    Project</label>
                                <div class="form-group mb-0">
                                    <select name="project_id" class="form-control select-picker"
                                        data-size="8">
                                        <option value="">--</option>
                                            @foreach ( $project as $item )
                                            <option value="{{ $item->id }}" {{ old('project_id') == $item->id}}>
                                                {{ $item->projectname }}
                                            </option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">

                                    <label for="label">Purchased From</label>
                                    <input type="text" value="" name="purchase_from" id="purchase_from"
                                        class="form-control" />

                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <input class="btn btn-light" type="reset" value="Cancel">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
