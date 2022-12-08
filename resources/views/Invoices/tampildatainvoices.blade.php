@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="card">
            <div class="content-wrapper">
                <div class="bg-dark-grey rounded b-shadow-4 create-inv">
                    <div class="px-lg-4 px-md-4 px-3 py-3">
                        <h4 class="mb-0 f-21 font-weight-normal text-capitalize">Invoices Details</h4>
                    </div>
                    <hr class="m-0 border-top-grey">
                    <form action="/updatedatainvoices_admin/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row px-lg-4 px-md-4 px-3 py-3">
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group mb-0">
                                    <label class="f-14 text-dark-grey mb-12 mt-3 text-capitalize" for="usr">Invoice
                                        Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend  height-35 ">
                                            <span
                                                class="input-group-text border-grey f-15 bg-additional-grey px-3 text-dark"
                                                id="basic-addon1">INV#00</span>
                                        </div>
                                        <input type="text" name="invoice_number" id="invoice_number"
                                            class="form-control height-35 f-15" value="{{ $data->invoice_number }}"
                                            placeholder="ex.01" aria-label="ex.01" aria-describedby="basic-addon1"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">

                                    <label for="label">Invoice Date</label>
                                    <input type="date" value="{{ $data->invoice_date }}" name="invoice_date"
                                        id="invoice_date" class="form-control" />

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">

                                    <label for="label">Due Date</label>
                                    <input type="date" value="{{ $data->due_date }}" name="due_date" id="due_date"
                                        class="form-control" />

                                </div>
                            </div>
                            <hr class="m-0 border-top-grey">
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
                                <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="choose_client">Choose
                                    Client</label>
                                <div class="form-group mb-0">
                                    <select name="users_id" class="form-control select-picker" data-size="8">
                                        <option value="">--</option>
                                        @foreach ($client as $item)
                                            @if ($item->level == 'Client')
                                                <option value="{{ $item->id }}" {{ old('users_id') == $item->id }}>
                                                    {{ $item->username }}
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
                                    <select name="project_id" class="form-control select-picker" data-size="8">
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
                                <div class="form-group my-3">

                                    <label for="label">Shipping Address</label>
                                    <textarea class="form-control" value="{{ $data->shipping_address }}" name="shipping_address" id="shipping_address"
                                        rows="4" placeholder="e.g. 132, My Street, Kingston, New York 12401"></textarea>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">

                                    <label for="label">Qty / Hrs</label>
                                    <input type="number" value="{{ $data->quantity }}" name="quantity" id="quantity "
                                        class="form-control" />

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">

                                    <label for="label">Unit Price</label>
                                    <input type="text" value="{{ $data->unit_price }}" name="unit_price"
                                        id="unit_price " class="form-control" />

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
                                <div class="form-group my-3">

                                    <label for="label">Total</label>
                                    <input type="text" value="{{ $data->total }}" name="total" id="total "
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
