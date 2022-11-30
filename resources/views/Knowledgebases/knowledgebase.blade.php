@extends('layouts.layout')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Knowledgebase</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboardv2">Home</a></li>
                            <li class="breadcrumb-item active">Knowledgebase</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid faq-section">
            <div class="row">
                <div class="col-xl-4 xl-50 col-lg-6 box-col-6">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="media faq-widgets">
                                <div class="media-body">
                                    <h5>Articles</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                        nascetur ridiculus mus.</p>
                                </div><i data-feather="book-open"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 xl-50 col-lg-6 box-col-6">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="media faq-widgets">
                                <div class="media-body">
                                    <h5>Knowledgebase</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                        nascetur ridiculus mus.</p>
                                </div><i data-feather="aperture"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 xl-100 box-col-12">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="media faq-widgets">
                                <div class="media-body">
                                    <h5>Support</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                        dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                        nascetur ridiculus mus.</p>
                                </div><i data-feather="file-text"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection

@push('scripts')
@endpush
