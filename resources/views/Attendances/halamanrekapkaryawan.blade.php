@extends('Layouts.layout')

@section('content')
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="page-body">
            <!-- Container-fluid starts-->
            <div class="container-fluid dashboard-default-sec">
                <h1> Employee Attandance Recap </h1>
            </div>
            <!-- Container-fluid Ends-->

            <div class="content">
                <div class="row justify-content-center">
                    <div class="card card-info card-outline">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="label"> Start Date </label>
                                <input type="date" name="tglawal" id="tglawal" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="label"> End Date </label>
                                <input type="date" name="tglakhir" id="tglakhir" class="form-control" />
                            </div>
                            <div class="form-group">
                                <a href="" onclick="this.href='/filterdata_admin/'+ document.getElementById('tglawal').value +
                            '/' + document.getElementById('tglakhir').value " class="btn btn-primary col-md-12">
                                    View <i class="icon-printer"></i>
                                </a>
                            </div>
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
            </div>
        </div>
    </body>
    @endsection

