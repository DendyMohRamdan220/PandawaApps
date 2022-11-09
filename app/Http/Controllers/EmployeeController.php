<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $data = Employee::all();
        $data = Employee::paginate(10);
        return view('Employee.dataemployee', compact('data'));
    }

    public function tambahemployee(){
        return view('Employee.tambahdataemployee');
    }

    public function insertemployee(Request $request){
        //dd($request->all());
        Employee::create($request->all());
        return redirect()->route('employee')->with('success', 'Data Berhasil di Tambahkan');
    }

    public function tampilemployee($id){
        $data = Employee::find($id);
        //dd($data);
        return view('Employee.tampildataemployee', compact('data'));
    }

    public function updateemployee(Request $request, $id){
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect()->route('employee')->with('success', 'Data Berhasil di Update');
    }

    public function hapusemployee($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('employee')->with('success', 'Data Berhasil di Hapus');
    }
}
