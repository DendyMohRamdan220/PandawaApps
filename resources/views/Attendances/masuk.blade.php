@extends('Layouts.layout')

@section('content')

    <head>
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
                <h1> Attandance-In </h1>
            </div>
            <!-- Container-fluid Ends-->
            <div class="content">
                <div class="row justify-content-center">
                    <div class="card card-info card-outline">
                        <div class="card-header"> Clock-In </div>
                        <div class="card-body">
                            <form action="{{ route('simpan_masuk') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <center>
                                        <label id="clock"
                                            style="font-size: 100px; color: #0A77DE; -webkit-text-stroke: 3px #00ACFE;">
                                        </label>
                                    </center>
                                </div>
                                <center>
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ $message }}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"> Clock-In </button>
                                    </div>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
