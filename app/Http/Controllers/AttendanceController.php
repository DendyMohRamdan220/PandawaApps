<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index(){
        $data = Attendance::all();
        // $data = Attendance::select('employees.*', 'attendances.*')
        // ->join('employees','employees.id', '=', 'attendances.attendance_id')->get();
        $data = Attendance::paginate(10);
        return view('Employee.attendance', compact('data'));
    }

    public function tambahattendance(){
        return view('Employee.tambah_attendance');
    }

    public function insertattendance(Request $request){
        //dd($request->all());
        Attendance::create($request->all());
        return redirect()->route('attendance')->with('success', 'Data Berhasil di Tambahkan');
    }
}
