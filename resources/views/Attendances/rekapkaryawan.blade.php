@extends('Layouts.layout')

@section('content')
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="page-body">
            <!-- Container-fluid starts-->
            <div class="container-fluid dashboard-default-sec">
                <h1>Rekap Absensi Karyawan</h1>
            </div>
            <!-- Container-fluid Ends-->

            <div class="content">
                <div class="row justify-content-center">
                    <div class="card card-info card-outline">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="label">Tanggal Awal</label>
                                <input type="date" name="tglawal" id="tglawal" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="label">Tanggal Akhir</label>
                                <input type="date" name="tglakhir" id="tglakhir" class="form-control" />
                            </div>
                            <div class="form-group">
                                <a href=""
                                    onclick="this.href='/filterdata_admin/'+ document.getElementById('tglawal').value +
                            '/' + document.getElementById('tglakhir').value "
                                    class="btn btn-primary col-md-12">
                                    Lihat <i class="icon-printer"></i>
                                </a>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Pegawai</th>
                                                <th>Tanggal</th>
                                                <th>Masuk</th>
                                                <th>Keluar</th>
                                                <th>Jumlah Jam Kerja</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($presensi as $item)
                                                <tr>
                                                    <td>{{ $item->user->name }}</td>
                                                    <td>{{ $item->date }}</td>
                                                    <td>{{ $item->clockin }}</td>
                                                    <td>{{ $item->clockout }}</td>
                                                    <td>{{ $item->officehours }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
