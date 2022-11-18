<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $data = Employee::all();
        $data = Employee::paginate(10);
        return view('Employees.employee', compact('data'));
    }

    public function tambahemployee()
    {
        return view('Employees.tambah_employee');
    }

    public function insertemployee(Request $request)
    {
        //dd($request->all());
        Employee::create($request->all());
        return redirect('/employee_admin')->with('success', 'Data Berhasil di Tambahkan');
    }

    public function tampilemployee($id)
    {
        $data = Employee::find($id);
        //dd($data);
        return view('Employees.edit_employee', compact('data'));
    }

    public function updateemployee(Request $request, $id)
    {
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect('/employee_admin')->with('success', 'Data Berhasil di Update');
    }

    public function hapusemployee(Request $request, $id)
    {
        $data = Employee::find($id);
        $data->delete();
        return redirect('employee_admin')->with('success', 'Data Berhasil di Hapus');
    }
}
