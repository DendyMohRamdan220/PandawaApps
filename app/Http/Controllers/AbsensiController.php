<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use App\Models\Attendance;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Attendances.masuk');
    }

    public function keluar()
    {
    return view('Attendances.keluar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Attendance::where([
        ['user_id','=',auth()->user()->id],
        ['date','=',$tanggal],
        ])->first();
        if ($presensi){
        return redirect()->intended('presensi_sudah_masuk');

        }else{
        Attendance::create([
        'user_id' => auth()->user()->id,
        'date' => $tanggal,
        'clockin' => $localtime,
        ]);
        }

        return redirect('presensi_masuk')->with('success', 'You have successfully filled in attendance');
    }

    public function sudah_masuk()
    {
    return view('Attendances.sudahmasuk');
    }

    public function halamanrekap()
    {
    return view('Attendances.halamanrekapkaryawan');
    }

    public function tampildatakeseluruhan($tglawal, $tglakhir)
    {
    $presensi = Attendance::with('user')->whereBetween('date',[$tglawal, $tglakhir])->orderBy('date','asc')->get();
    return view('Attendances.rekapkaryawan',compact('presensi'));
    }

    public function presensipulang()
    {
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Attendance::where([
        ['user_id','=',auth()->user()->id],
        ['date','=',$tanggal],
        ])->first();

        $dt=[
        'clockout' => $localtime,
        'officehours' => date('H:i:s', strtotime($localtime) - strtotime($presensi->clockin))
        ];

        if ($presensi->clockout == ""){
        $presensi->update($dt);
        return redirect('presensi_keluar')->with('success', 'You have successfully exited the presence');
        }else{
        return redirect()->intended('presensi_sudah_keluar');

        }

    }

    public function sudah_keluar()
    {
    return view('Attendances.sudahkeluar');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
