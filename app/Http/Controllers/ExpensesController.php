<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use Illuminate\Http\Request;
use App\Models\project;
use App\Models\User;
use PDF;


class ExpensesController extends Controller
{
    //
    public function dataexpenses_admin(Request $request)
    {
        if ($request->has('search')) {
            $data = Expenses::where('leads_name', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Expenses::paginate(5);
        }
        return view('Expenses.dataexpenses', compact('data'));
    }

    public function tambahdataexpenses_admin()
    {
        $employee = User::all();
        $project = Project::all();
        return view('Expenses.tambahdataexpenses', compact('project', 'employee'));
    }

    public function insertdataexpenses_admin(Request $request)
    {
        Expenses::create($request->all());
        return redirect('/dataexpenses_admin')->with('success', 'Expenses added successfully .');
    }

    public function editdataexpenses_admin($id)
    {
        $employee = User::all();
        $project = Project::all();
        $data = Expenses::find($id);
        return view('Expenses.tampildataexpenses', compact('data', 'project', 'employee'));
    }

    public function updatedataexpenses_admin(Request $request, $id)
    {
        $data = Expenses::find($id);
        $data->update($request->all());
        return redirect('/dataexpenses_admin')->with('success', 'Expenses edited successfully .');
    }

    public function deletedataexpenses_admin($id)
    {
        $data = Expenses::find($id);
        $data->delete();
        return redirect('/dataexpenses_admin')->with('success', 'Expenses deleted successfully .');
    }

    public function exportpdf_admin()
    {
        $data = Expenses::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Expenses.dataexpenses-pdf_admin');
        return $pdf->download('data.pdf');
    }
}