@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="card">
            <div class="content-wrapper">
                <div class="bg-dark-grey rounded b-shadow-4 create-inv">
                    <div class="px-lg-4 px-md-4 px-3 py-3">
                        <h4 class="mb-0 f-21 font-weight-normal text-capitalize">Estimate Details</h4>
                    </div>
                    <hr class="m-0 border-top-grey">
                    <form action="/insertdataestimate_admin" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row px-lg-4 px-md-4 px-3 py-3">
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group mb-0">
                                    <label class="f-14 text-dark-grey mb-12 mt-3 text-capitalize" for="usr">Estimate
                                        Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend  height-35 ">
                                            <span
                                                class="input-group-text border-grey f-15 bg-additional-grey px-3 text-dark"
                                                id="basic-addon1">EST#00</span>
                                        </div>
                                        <input type="text" name="estimate_number" id="estimate_number"
                                            class="form-control height-35 f-15" value="" placeholder="ex.01"
                                            aria-label="ex.01" aria-describedby="basic-addon1" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">

                                    <label for="label">Valid till</label>
                                    <input type="date" value="" name="valid_till" id="valid_till"
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
                                <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="select_product">Select
                                    Product</label>
                                <div class="form-group mb-0">
                                    <select name="products_id" id="select_product" class="form-control select-picker"
                                        data-size="8">
                                        <option value="">--</option>
                                        @foreach ($products as $item)
                                            <option value="{{ $item->id }}" {{ old('products_id') == $item->id }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">

                                    <label for="label">Qty / Hrs</label>
                                    <input type="number" name="quantity" id="quantity " class="form-control" />

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">

                                    <label for="label">Unit Price</label>
                                    <input type="text" name="unit_price" id="unit_price " class="form-control" />

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">

                                    <label for="label">Amount</label>
                                    <input type="text" name="amount" id="amount " class="form-control" />

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">

                                    <label for="label">Total</label>
                                    <input type="text" value="" name="total" id="total "
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
