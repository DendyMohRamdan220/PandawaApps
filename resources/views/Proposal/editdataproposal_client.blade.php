@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3> Proposal </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboardv2"> Home </a></li>
                            <li class="breadcrumb-item"> Finance </li>
                            <li class="breadcrumb-item"><a href="/dataproposal_client"> Proposal </a></li>
                            <li class="breadcrumb-item active"> Update Proposal </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header row">
                    <h5> Proposal Detail </h5>
                    <div class="add-proposal bg-dark-grey rounded">
                        <form action="/updatedataproposal_client/{{ $data->id }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row p-20">
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group my-3">
                                        <label for="label">Proposal Name</label>
                                        <input type="text" value="{{ $data->proposal_name }}" name="proposal_name"
                                            id="proposal_name" required="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="leads_name">Lead
                                        Name</label>
                                    <div class="form-group mb-0">
                                        <select name="leads_id" class="form-control select-picker" data-size="8" required="">
                                            <option value="">--</option>
                                            @foreach ($leads as $items)
                                                <option value="{{ $items->id }}"
                                                    {{ old('leads_id', $data->leads_id) == $items->id ? 'selected' : null }}>
                                                    {{ $items->leads_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group my-3">

                                        <label for="label">Valid till</label>
                                        <input type="date" value="{{ $data->valid_till }}" name="valid_till"
                                            id="valid_till" required="" class="form-control" />

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <label class="f-14 text-dark-grey mb-12 mt-3" data-label=""
                                        for="currency">Currency</label>
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
                                    <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="select_product">Select
                                        Product</label>
                                    <div class="form-group mb-0">
                                        <select name="products_id" class="form-control select-picker" data-size="8" required="">
                                            <option value="">--</option>
                                            @foreach ($products as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ old('products_id', $data->products_id) == $item->id ? 'selected' : null }}>
                                                    {{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group my-3">
                                        <label for="label">Qty / Hrs</label>
                                        <input type="number" name="quantity" id="quantity" value="{{ $data->quantity }}"
                                            class="quantity form-control" required="" onkeyup="Mul('0')">

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group my-3">
                                        <label for="label">Unit Price</label>
                                        <input type="number" name="price" id="price" value="{{ $data->price }}"
                                            class="price form-control" required="" onkeyup="Mul('0')">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group my-3">
                                        <label for="label">Total</label>
                                        <input type="text" name="total" id="total" value="{{ $data->total }}"
                                            class="amount form-control" readonly>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button class="btn btn-primary" type="submit"> Submit </button>
                                    <a href="/dataproposal_client"class="btn btn-light">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
