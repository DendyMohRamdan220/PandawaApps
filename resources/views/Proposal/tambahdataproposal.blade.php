@extends('Layouts.layout')

@section('content')


    <div class="page-body">
        <div class="card">
            <div class="card-header pb-0">
                <h5>Add Proposal Detail</h5>
                <div class="add-produk bg-dark-grey rounded">
                    <div class="row p-20">
                        <div class="col-lg-4 col-md-6">
                            <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="produk_kategori">Lead Name</label>
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
                            <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="produk_kategori">Currency</label>
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
                            <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="produk_kategori">Select Product</label>
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

                        <div id="sortable">
                            <!-- DESKTOP DESCRIPTION TABLE START -->
                            <div class="d-flex px-4 py-3 c-inv-desc item-row">
                                <div class="c-inv-desc-table w-100 d-lg-flex d-md-flex d-block">
                                    <table>
                                        <tbody>
                                            <tr class="text-dark-grey font-weight-bold f-14">
                                                <td width="39%" class="border-1 inv-desc-mbl btlr">Description</td>
                                                <td width="10%" class="border-1 align=right">Qty/Hrs</td>
                                                <td width="10%" class="border-1 align=right">Unit Price</td>
                                                <td width="13%" class="border-1 align=right">Tax</td>
                                                <td width="17%" class="border-1 bblr-mbl align=right">Amount</td>
                                            </tr>
                                            <tr>
                                                <td class="border-bottom-2 btrr-mbl btlr">
                                                    <input type="text" class="f-14 border-1 w-100 item_name form-control" name="item_name[]" placeholder="Item Name" autocomplete="off">
                                                </td>
                                                <td class="border-bottom-2 d-block d-lg-none d-md-none">
                                                    <textarea class="f-14 border-1 w-100 mobile-description form-control" name="item_summary[]" placeholder="Enter Description (optional)"></textarea>
                                                </td>
                                                <td class="border-bottom-1">
                                                    <input type="number" min="1" class="f-14 border-1 w-100 text-right quantity form-control" value="1" name="quantity[]" autocomplete="off">
                                                </td>
                                                <td class="border-bottom-1">
                                                    <input type="number" min="1" class="f-14 border-1 w-100 text-right cost_per_item form-control" placeholder="0.00" value="0" name="cost_per_item[]" autocomplete="off">
                                                </td>
                                                <td class="border-bottom-1">
                                                    <div class="select-others height-35 rounded border-1">
                                                        <div class="dropdown bootstrap-select show-tick select-picker type customSequence border-1">
                                                            <div class="dropdown-menu ">
                                                                <div class="inner show" role="listbox" id="bs-select-5" tabindex="-1" aria-multiselectable="true">
                                                                    <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td rowspan="2" valign="right" class="bg-amt-grey btrr-bbrr">
                                                    <span class="amount-html">0.00</span>
                                                    <input type="hidden" class="amount" name="amount[]" value="0" autocomplete="off">
                                                </td>
                                            </tr>
                                            <tr class="d-none d-md-table-row d-lg-table-row">
                                                <td colspan="3" class="dash-border-top bblr">
                                                    <textarea class="f-14 border-1 w-100 desktop-description form-control" name="item_summary[]" placeholder="Enter Description (optional)"></textarea>
                                                </td>
                                                <td class="border-left-1">
                                                    <div class="dropify-wrapper" style="height: 82px;">
                                                        <div class="dropify-message">
                                                            <span class="file-icon"></span>
                                                            <p>Choose a file</p>
                                                        </div>
                                                        <div class="dropify-loader"></div>
                                                        <div class="dropify-errors-container">
                                                            <ul></ul>
                                                        </div>
                                                        <input type="file" class="dropify" name="invoice_item_image[]" data-allowed-file-extensions="png jpg jpeg" data-messages-default="test" data-height="70" autocomplete="off">
                                                        <button type="button" class="dropify-clear">Remove</button>
                                                        <div class="dropify-preview">
                                                            <span class="dropify-render"></span>
                                                            <div class="dropify-infos">
                                                                <div class="dropify-infos-inner">
                                                                    <p class="dropify-filename">
                                                                        <span class="dropify-filename-inner"></span>
                                                                    </p>
                                                                    <p class="dropify-infos-message">Drop a file or click to replace</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="invoice_item_image_url[]" autocomplete="off">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                        <a href="javascript:;" class="d-flex align-items-center justify-content-center ml-3 remove-item"><svg class="svg-inline--fa fa-times-circle fa-w-16 f-20 text-lightest" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="times-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path></svg><!-- <i class="fa fa-times-circle f-20 text-lightest"></i> Font Awesome fontawesome.com --></a>
                    </div>
                </div>
                <!-- DESKTOP DESCRIPTION TABLE END -->
            
        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
