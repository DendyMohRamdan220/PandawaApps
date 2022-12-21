<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use App\Models\project;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class ExpensesController extends Controller
{
    // Portal Management >>
    public function dataexpenses_admin(Request $request)
    {
        $keyword = $request->keyword;
        $data = Expenses::with('user', 'project')
            ->where('item_name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('purchase_from', 'LIKE', '%' . $keyword . '%')
            ->orWhere('price', 'LIKE', '%' . $keyword . '%')
            ->orWhere('created_at', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->orWhereHas('project', function ($query) use ($keyword) {
                $query->where('projectname', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(10);
        return view('Expenses.dataexpenses', compact('data'));
    }

    public function tambahdataexpenses_admin()
    {
        $user = User::all();
        $project = Project::all();
        return view('Expenses.tambahdataexpenses', compact('user', 'project'));
    }

    public function insertdataexpenses_admin(Request $request)
    {
        Expenses::create($request->all());
        return redirect('/dataexpenses_admin')->with('success', 'Expenses added successfully .');
    }

    public function editdataexpenses_admin($id)
    {
        $user = User::all();
        $project = Project::all();
        $data = Expenses::find($id);
        return view('Expenses.tampildataexpenses', compact('data', 'user', 'project'));
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
        $data = Expenses::with('user', 'project')->get();
        view()->share('data', $data);
        $pdf = PDF::loadview('Expenses.dataexpenses-pdf');
        return $pdf->download('data.pdf');
    }

    // Portal Sales >>
    public function dataexpenses_sales(Request $request)
    {
        $keyword = $request->keyword;
        $data = Expenses::with('user', 'project')
            ->where('item_name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('purchase_from', 'LIKE', '%' . $keyword . '%')
            ->orWhere('price', 'LIKE', '%' . $keyword . '%')
            ->orWhere('created_at', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->orWhereHas('project', function ($query) use ($keyword) {
                $query->where('projectname', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(10);
        return view('Expenses.dataexpenses_sales', compact('data'));
    }

    public function tambahdataexpenses_sales()
    {
        $user = User::all();
        $project = Project::all();
        return view('Expenses.tambahdataexpenses_sales', compact('user', 'project'));
    }

    public function insertdataexpenses_sales(Request $request)
    {
        Expenses::create($request->all());
        return redirect('/dataexpenses_sales')->with('success', 'Expenses added successfully .');
    }

    public function editdataexpenses_sales($id)
    {
        $user = User::all();
        $project = Project::all();
        $data = Expenses::find($id);
        return view('Expenses.editdataexpenses_sales', compact('data', 'user', 'project'));
    }

    public function updatedataexpenses_sales(Request $request, $id)
    {
        $data = Expenses::find($id);
        $data->update($request->all());
        return redirect('/dataexpenses_sales')->with('success', 'Expenses edited successfully .');
    }

    public function deletedataexpenses_sales($id)
    {
        $data = Expenses::find($id);
        $data->delete();
        return redirect('/dataexpenses_sales')->with('success', 'Expenses deleted successfully .');
    }

    public function exportpdf_sales()
    {
        $data = Expenses::with('user', 'project')->get();
        view()->share('data', $data);
        $pdf = PDF::loadview('Expenses.dataexpenses-pdf_sales');
        return $pdf->download('data.pdf');
    }
}
