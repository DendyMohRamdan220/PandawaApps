@extends('Layouts.layout')

@section('content')
    <div class="page-body">
        <div class="card">
            <div class="card-header pb-0">
                <h5>Add Proposal Detail</h5>
                <div class="add-produk bg-dark-grey rounded">
                    <div class="col-lg-4 col-md-6">
                        <label class="f-14 text-dark-grey mb-12 mt-3" data-label="true" for="proposal_category_lead">Lead</label>
                        <div class="form-group mb-0">

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
                                </select><button type="button" tabindex="-1"
                                    class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown"
                                    role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false"
                                    data-id="lead_id" title="--">
                                    <div class="filter-option">
                                        <div class="filter-option-inner">
                                            <div class="filter-option-inner-inner">--</div>
                                        </div>
                                    </div>
                                </button>
                                <div class="dropdown-menu ">
                                    <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off"
                                            role="combobox" aria-label="Search" aria-controls="bs-select-1"
                                            aria-autocomplete="list"></div>
                                    <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                        <ul class="dropdown-menu inner show" role="presentation"></ul>
                                    </div>
                                </div>
                            </div>


                            <div class="input-group-append">
                                <a href="https://demo.worksuite.biz/account/leads/create" id="add-client"
                                    class="btn btn-outline-secondary border-grey openRightModal"
                                    data-redirect-url="https://demo.worksuite.biz/account/proposals/create">Add</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
