@extends('Layouts.layout')

@section('content')
    <script src="{{ asset('Js/jam.js') }}"></script>
    <style>
        #watch {
            color: rgb(252, 150, 65);
            position: absolute;
            z-index: 1;
            height: 40px;
            width: 700px;
            overflow: show;
            margin: auto;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            font-size: 10vw;
            -webkit-text-stroke: 3px rgb(210, 65, 36);
            text-shadow: 4px 4px 10px rgba(210, 65, 36, 0.4),
                4px 4px 20px rgba(210, 45, 26, 0.4),
                4px 4px 30px rgba(210, 25, 16, 0.4),
                4px 4px 40px rgba(210, 15, 06, 0.4);
        }
    </style>

    </head>

    <body class="hold-transition sidebar-mini" onload="realtimeClock()">
        <div class="page-body">
            <!-- Container-fluid starts-->
            <div class="container-fluid dashboard-default-sec">
                <h1> Attandance-Out </h1>
            </div>
            <!-- Container-fluid Ends-->

            <div class="content">
                <div class="row justify-content-center">
                    <div class="card card-info card-outline">
                        <div class="card-header"> Clock-Out </div>
                        <div class="card-body">
                            <form action="{{ route('ubah_presensi') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <center>
                                        <label id="clock"
                                            style="font-size: 100px; color: #659980; -webkit-text-stroke: 3px #02C39A;">
                                        </label>
                                    </center>
                                </div>
                                <center>
                                    <div class="form-group">
                                        <label> You have exited the previous presence </label>
                                    </div>
                                </center>
                                <center>
                                    <div class="form-group">
                                        <a href="/presensi_keluar" type="submit" class="btn btn-primary"> Return </a>
                                    </div>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
