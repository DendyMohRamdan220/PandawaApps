<?php

namespace App\Http\Controllers;

use App\Models\Invoices;
use App\Models\project;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class InvoicesController extends Controller
{
    // Portal Management >>
    public function datainvoices_admin(Request $request)
    {
        $keyword = $request->keyword;
        $data = Invoices::with('user', 'project')
            ->where('total', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->orWhereHas('project', function ($query) use ($keyword) {
                $query->where('projectname', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(10);
        return view('Invoices.datainvoices', compact('data'));
    }

    public function tambahdatainvoices_admin()
    {
        $user = User::all();
        $project = Project::all();
        return view('Invoices.tambahdatainvoices', compact('user', 'project'));
    }

    public function insertdatainvoices_admin(Request $request)
    {
        Invoices::create($request->all());
        return redirect('/datainvoices_admin')->with('success', 'Invoices added successfully .');
    }

    public function editdatainvoices_admin($id)
    {
        $user = User::all();
        $project = Project::all();
        $data = Invoices::find($id);
        return view('Invoices.tampildatainvoices', compact('data', 'user', 'project'));
    }

    public function updatedatainvoices_admin(Request $request, $id)
    {
        $data = Invoices::find($id);
        $data->update($request->all());
        return redirect('/datainvoices_admin')->with('success', 'Invoices edited successfully .');
    }

    public function deletedatainvoices_admin($id)
    {
        $data = Invoices::find($id);
        $data->delete();
        return redirect('/datainvoices_admin')->with('success', 'Invoices deleted successfully .');
    }

    public function exportpdf_admin()
    {
        $data = Invoices::with('user', 'project')->get();
        view()->share('data', $data);
        $pdf = PDF::loadview('Invoices.datainvoices-pdf_admin');
        return $pdf->download('data_Invoices.pdf');
    }

    // Portal Client >>
    public function datainvoices_client(Request $request)
    {
        $keyword = $request->keyword;
        $data = Invoices::with('user', 'project')
            ->where('total', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->orWhereHas('project', function ($query) use ($keyword) {
                $query->where('projectname', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(10);
        return view('Invoices.datainvoices_client', compact('data'));
    }

    public function exportpdf_client()
    {
        $data = Invoices::with('user', 'project')->get();
        view()->share('data', $data);
        $pdf = PDF::loadview('Invoices.datainvoices-pdf_client');
        return $pdf->download('data_Invoices.pdf');
    }

    // Portal Sales >>
    public function datainvoices_sales(Request $request)
    {
        $keyword = $request->keyword;
        $data = Invoices::with('user', 'project')
            ->where('total', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->orWhereHas('project', function ($query) use ($keyword) {
                $query->where('projectname', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(10);
        return view('Invoices.datainvoices_sales', compact('data'));
    }

    public function tambahdatainvoices_sales()
    {
        $user = User::all();
        $project = Project::all();
        return view('Invoices.tambahdatainvoices_sales', compact('user', 'project'));
    }

    public function insertdatainvoices_sales(Request $request)
    {
        Invoices::create($request->all());
        return redirect('/datainvoices_sales')->with('success', 'Invoices added successfully .');
    }

    public function editdatainvoices_sales($id)
    {
        $user = User::all();
        $project = Project::all();
        $data = Invoices::find($id);
        return view('Invoices.tampildatainvoices_sales', compact('data', 'user', 'project'));
    }

    public function updatedatainvoices_sales(Request $request, $id)
    {
        $data = Invoices::find($id);
        $data->update($request->all());
        return redirect('/datainvoices_sales')->with('success', 'Invoices edited successfully .');
    }

    public function deletedatainvoices_sales($id)
    {
        $data = Invoices::find($id);
        $data->delete();
        return redirect('/datainvoices_sales')->with('success', 'Invoices deleted successfully .');
    }

    public function exportpdf_sales()
    {
        $data = Invoices::with('user', 'project')->get();
        view()->share('data', $data);
        $pdf = PDF::loadview('Invoices.datainvoices-pdf_sales');
        return $pdf->download('data_Invoices.pdf');
    }
}
