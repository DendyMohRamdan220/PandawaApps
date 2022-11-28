@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="card">
            <div class="card-header pb-0">
                <h5>Add Proposal Detail</h5>
                <div class="add-produk bg-dark-grey rounded">
                    <div class="row p-20">
                        <div class="col-lg-4 col-md-6">
                            <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="produk_kategori">Lead
                                Name</label>
                            <div class="form-group mb-0">
                                <select name="produk_kategori" id="produk_kategori" class="form-control select-picker"
                                    data-size="8">
                                    <option value="">--</option>
                                    <option value="9">
                                        Albin Vandervort</option>
                                    <option value="5">
                                        Antonia Bruen</option>
                                    <option value="8">
                                        Casandra Roberts</option>
                                    <option value="6">
                                        Constance Mueller</option>
                                    <option value="2">
                                        Dino Crist</option>
                                    <option value="10">
                                        Jónatan</option>
                                    <option value="7">
                                        Mr. Zechariah Stokes</option>
                                    <option value="3">
                                        Oda Kreiger</option>
                                    <option value="4">
                                        Prof. Gladyce Quitzon</option>
                                    <option value="1">
                                        Test Client</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="form-group my-3">

                                <label for="label">Valid till</label>
                                <input type="date" name="validtill" id="validtill" class="form-control" />

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <label class="f-14 text-dark-grey mb-12 mt-3" data-label=""
                                for="produk_kategori">Currency</label>
                            <div class="form-group mb-0">
                                <select name="produk_kategori" id="produk_kategori" class="form-control select-picker"
                                    data-size="8">
                                    <option value="1">
                                        USD ($)
                                    </option>
                                    <option value="2">
                                        GBP (£)
                                    </option>
                                    <option value="3">
                                        EUR (€)
                                    </option>
                                    <option value="4">
                                        IDR (Rp)
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="produk_kategori">Select
                                Product</label>
                            <div class="form-group mb-0">
                                <select name="produk_kategori" id="produk_kategori" class="form-control select-picker"
                                    data-size="8">
                                    <option value="">--</option>
                                    <option value="9">
                                        Jasa</option>
                                    <option value="5">
                                        Maintenance</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="form-group my-3">

                                <label for="label">Qty / Hrs</label>
                                <input type="number" name="qtyhrs" id="qtyhrs " class="form-control" />

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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
