@extends('Layouts.layout')

@section('content')

<link href="E:\catur\Blog artikel\html\datepicker\modul\date_picker_bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="E:\catur\Blog artikel\html\datepicker\modul\date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <div class="page-body">
        <div class="card">
            <div class="card-header pb-0">
                <h5>Add Proposal Detail</h5>
                <div class="add-produk bg-dark-grey rounded">
                    <div class="row p-20">
                        <div class="col-lg-4 col-md-6">
                            <label class="f-14 text-dark-grey mb-12 mt-3" data-label="true" for="proposal_category_lead">Lead</label>
                            <div class="form-group mb-1">
                                <div class="dropdown bootstrap-select form-control select-picker"><select name="lead_id"
                                        id="lead_id" class="form-control select-picker" data-live-search="true"
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
                        </div>

                        <div class="col-lg-4 col-md-6 ">
                            <div class="form-group mb-1">
                                <label class="f-14 text-dark-grey mb-12" data-label="true" for="due_date">Valid Till
                                    <sup class="f-14 mr-1">*</sup>
                                </label>
                                <div class="input-group">
                                    <input type="text" id="valid_till" name="valid_till" class="px-6 position-relative text-dark font-weight-normal form-control height-35 rounded p-0 text-left f-15" placeholder="Select Date" value="25-12-2022" autocomplete="off">
                                    <div class="qs-datepicker-container qs-hidden">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
