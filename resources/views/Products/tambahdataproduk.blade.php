@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3> Add Product </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard_admin"> Home </a></li>
                            <li class="breadcrumb-item"><a href="/dataproduk_admin"> Product </a></li>
                            <li class="breadcrumb-item active"> Add Product </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header pb-0">
                <h5> Product Detail </h5>
                <div class="add-produk bg-dark-grey rounded">
                    <form action="/insertdataproduk_admin" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row p-20">
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">
                                    <label class="f-14 text-dark-grey mb-12" data-label="true" for="name"> Name <sup
                                            class="f-14 mr-1">*</sup></label>
                                    <input type="text" class="form-control height-35 f-14" value="" name="name"
                                        id="name" required="" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group my-3">
                                    <label class="f-14 text-dark-grey mb-12" data-label="true" for="price">Price</label>
                                    <input type="text" class="form-control height-35 f-14" value="" name="price"
                                        id="price" required="" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="produk_kategori"> Product
                                    Category </label>
                                <div class="form-group mb-0">
                                    <select name="produk_kategori" id="produk_kategori" class="form-control select-picker"
                                        required="" data-size="8">
                                        <option value="">--</option>
                                        <option value="1">Jasa</option>
                                        <option value="2">Elektronik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="produk_sub_kategori">
                                    Product Sub-Category </label>
                                <div class="form-group mb-0">
                                    <select name="produk_sub_kategori" id="produk_sub_kategori"
                                        class="form-control select-picker" required="" data-size="8">
                                        <option value="">--</option>
                                        <option value="1">Laptop</option>
                                        <option value="2">Engine</option>
                                        <option value="3">Notebook</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary" type="submit"> Submit </button>
                            <a href="/dataproduk_admin"class="btn btn-light">Cancel</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
{{-- <div class="w-100 border-top-grey d-block d-lg-flex d-md-flex justify-content-start px-4 py-3"> --}}
