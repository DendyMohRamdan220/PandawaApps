@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="card">
            <div class="card-header pb-0">
                <h5>Add Product Detail</h5>
                <div class="add-produk bg-dark-grey rounded">
                    <div class="row p-20">
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group my-3">
                                <label class="f-14 text-dark-grey mb-12" data-label="true" for="produk_name">Name<sup
                                        class="f-14 mr-1">*</sup></label>
                                <input type="text" class="form-control height-35 f-14" value="" name="website"
                                    id="website" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group my-3">
                                <label class="f-14 text-dark-grey mb-12" data-label="true" for="produk_harga">Price</label>
                                <input type="text" class="form-control height-35 f-14" value="" name="produk_harga"
                                    id="produk_harga" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="produk_kategori">Product
                                Category</label>
                            <div class="form-group mb-0">
                                <select name="produk_kategori" id="produk_kategori" class="form-control select-picker"
                                    data-size="8">
                                    <option value="">--</option>
                                    <option selected="" value="4">Jasa</option>
                                    <option value="5">Elektronik</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="status">Product
                                Sub-Category</label>
                            <div class="form-group mb-0">
                                <select name="status" id="status" class="form-control select-picker" data-size="8">
                                    <option value="">--</option>
                                    <option selected="" value="4">Pending</option>
                                    <option value="5">Overview</option>
                                    <option value="6">Confirmed</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="status">Product
                                Sub-Category</label>
                            <div class="form-group mb-0">
                                <select name="status" id="status" class="form-control select-picker" data-size="8">
                                    <option value="">--</option>
                                    <option selected="" value="4">Pending</option>
                                    <option value="5">Overview</option>
                                    <option value="6">Confirmed</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <input class="btn btn-light" type="reset" value="Cancel">
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- <div class="w-100 border-top-grey d-block d-lg-flex d-md-flex justify-content-start px-4 py-3"> --}}