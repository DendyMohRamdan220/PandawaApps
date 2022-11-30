@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="card">
            <div class="content-wrapper">
                <div class="bg-dark-grey rounded b-shadow-4 create-inv">
                    <div class="px-lg-4 px-md-4 px-3 py-3">
                        <h4 class="mb-0 f-21 font-weight-normal text-capitalize"> Add Payments </h4>
                    </div>
                    <hr class="m-0 border-top-grey">
                    <form action="/updatedatapayments_admin/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row px-lg-4 px-md-4 px-3 py-3">
                            <div class="col-lg-4 col-md-6">
                                <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="select_project">Select
                                    Project</label>
                                <div class="form-group mb-0">
                                    <select name="select_project" id="select_project" class="form-control select-picker"
                                        data-size="8">
                                        <option selected>{{ $data->select_project }}</option>
                                        <option value="">--</option>
                                        <option value="1">
                                            Project 1</option>
                                        <option value="2">
                                            Project 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group mb-0">
                                    <label class="f-14 text-dark-grey mb-12 mt-3 text-capitalize" for="usr">Payment
                                        Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend  height-35 ">
                                            <span
                                                class="input-group-text border-grey f-15 bg-additional-grey px-3 text-dark"
                                                id="basic-addon1">PAY#00</span>
                                        </div>
                                        <input type="text" name="payments_number" id="payments_number"
                                            class="form-control height-35 f-15" value="{{ $data->payments_number }}"
                                            placeholder="ex.01" aria-label="ex.01" aria-describedby="basic-addon1"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">

                                    <label for="label">Paid on</label>
                                    <input type="date" value="{{ $data->paid_on }}" name="paid_on" id="paid_on"
                                        class="form-control" />

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="currency">Currency</label>
                                <div class="form-group mb-0">
                                    <select name="currency" id="currency" class="form-control select-picker"
                                        data-size="8">
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

                                    <label for="label">Amount</label>
                                    <input type="text" value="{{ $data->amount }}" name="amount" id="amount "
                                        class="form-control" />

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="payment_gateway">Payment
                                    Gateway</label>
                                <div class="form-group mb-0">
                                    <select name="payment_gateway" id="payment_gateway" class="form-control select-picker"
                                        data-size="8">
                                        <option selected>{{ $data->payment_gateway }}</option>
                                        <option value="">--</option>
                                        <option value="1">
                                            Offline Payments
                                        </option>
                                    </select>
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
