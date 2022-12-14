@extends('Layouts.layout')

@section('content')

    <head>
        <style type="text/css">
            body {
                background: #d2d2d2;
            }

            form {
                background: #fff;
            }
        </style>
    </head>

    <body>
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3> Convert Currency </h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard_admin"> Home </a></li>
                                <li class="breadcrumb-item"> Settings </li>
                                <li class="breadcrumb-item active"> Convert Currency </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <form action="{{ route('currency') }}" class="border rounded mt-5 pt-5" method="get">
                        <div class="row">
                            <div class="col-md-12 mb-4 text-center">
                                <h4 class="col-md-12 py-2 m-0">Fetch Currency Exchange Rates</h4>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <select class="form-select" name="currency_from" required>
                                            <option value="">Select Currency</option>
                                            <option value="IDR"
                                                {{ Request::get('currency_from') == 'IDR' ? 'selected' : '' }}>Indonesia
                                                Rupiah
                                            </option>
                                            <option value="AUD"
                                                {{ Request::get('currency_from') == 'AUD' ? 'selected' : '' }}>Australia
                                                Dollar
                                            </option>
                                            <option value="EUR"
                                                {{ Request::get('currency_from') == 'EUR' ? 'selected' : '' }}>Euro</option>
                                            <option value="GBP"
                                                {{ Request::get('currency_from') == 'GBP' ? 'selected' : '' }}>Great Britin
                                                Pound</option>
                                            <option value="INR"
                                                {{ Request::get('currency_from') == 'INR' ? 'selected' : '' }}>India Rupee
                                            </option>
                                            <option value="JPY"
                                                {{ Request::get('currency_from') == 'JPY' ? 'selected' : '' }}>Japan Yen
                                            </option>
                                            <option value="USD"
                                                {{ Request::get('currency_from') == 'USD' ? 'selected' : '' }}>USD Dollar
                                            </option>
                                        </select>
                                    </div>
                                    <h4 class="col-md-2 text-center m-0 p-0">To</h4>
                                    <div class="col-md-5 mb-3">
                                        <select class="form-select" name="currency_to" required>
                                            <option value="">Select Currency</option>
                                            <option value="IDR"
                                                {{ Request::get('currency_to') == 'IDR' ? 'selected' : '' }}>
                                                Indonesia Rupiah</option>
                                            <option value="AUD"
                                                {{ Request::get('currency_to') == 'AUD' ? 'selected' : '' }}>
                                                Australia Dollar</option>
                                            <option value="EUR"
                                                {{ Request::get('currency_to') == 'EUR' ? 'selected' : '' }}>Euro</option>
                                            <option value="GBP"
                                                {{ Request::get('currency_to') == 'GBP' ? 'selected' : '' }}>Great Britin
                                                Pound
                                            </option>
                                            <option value="INR"
                                                {{ Request::get('currency_to') == 'INR' ? 'selected' : '' }}>India Rupee
                                            </option>
                                            <option value="JPY"
                                                {{ Request::get('currency_to') == 'JPY' ? 'selected' : '' }}>Japan Yen
                                            </option>
                                            <option value="USD"
                                                {{ Request::get('currency_to') == 'USD' ? 'selected' : '' }}>USD Dollar
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label>Amount</label>
                                        <input type="number" name="amount" class="form-control"
                                            value="{{ Request::get('amount') }}" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Date</label>
                                        <input type="date" name="date" class="form-control"
                                            value="{{ Request::get('date') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label>Converted Amount</label>
                                    <input type="number" name="amount" value="{{ $converted }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex justify-content-center mb-4">
                                <button type="submit" class="col-3 btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
@endsection
