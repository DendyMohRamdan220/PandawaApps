<?php

namespace App\Http\Controllers;

use App\Models\Payments;
use App\Models\project;
use Illuminate\Http\Request;
use PDF;

class PaymentsController extends Controller
{
    // Portal Management >>
    public function datapayments_admin(Request $request)
    {
        $keyword = $request->keyword;
        $data = Payments::with('project')
            ->where('total', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('project', function ($query) use ($keyword) {
                $query->where('projectname', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(10);
        return view('Payment.datapayments', compact('data'));
    }

    public function tambahdatapayments_admin()
    {
        $project = Project::all();
        return view('Payment.tambahdatapayments', compact('project'));
    }

    public function insertdatapayments_admin(Request $request)
    {
        Payments::create($request->all());
        return redirect('/datapayments_admin')->with('success', 'Payments added successfully .');
    }

    public function editdatapayments_admin($id)
    {
        $project = Project::all();
        $data = Payments::find($id);
        return view('Payment.tampildatapayments', compact('data', 'project'));
    }

    public function updatedatapayments_admin(Request $request, $id)
    {
        $data = Payments::find($id);
        $data->update($request->all());
        return redirect('/datapayments_admin')->with('success', 'Payments edited successfully .');
    }

    public function deletedatapayments_admin($id)
    {
        $data = Payments::find($id);
        $data->delete();
        return redirect('/datapayments_admin')->with('success', 'Payments deleted successfully .');
    }

    public function exportpdf_admin()
    {
        $data = Payments::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Payments.datapayments-pdf_admin');
        return $pdf->download('data.pdf');
    }

    // Portal Client >>
    public function datapayments_client(Request $request)
    {
        $keyword = $request->keyword;
        $data = Payments::with('project')
            ->where('total', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('project', function ($query) use ($keyword) {
                $query->where('projectname', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(10);
        return view('Payment.datapayments_client', compact('data'));
    }

    public function exportpdf_client()
    {
        $data = Payments::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Payments.datapayments-pdf_client');
        return $pdf->download('data.pdf');
    }

    // Portal Sales >>
    public function datapayments_sales(Request $request)
    {
        $keyword = $request->keyword;
        $data = Payments::with('project')
            ->where('total', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('project', function ($query) use ($keyword) {
                $query->where('projectname', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(10);
        return view('Payment.datapayments_sales', compact('data'));
    }

    public function tambahdatapayments_sales()
    {
        $project = Project::all();
        return view('Payment.tambahdatapayments_sales', compact('project'));
    }

    public function insertdatapayments_sales(Request $request)
    {
        Payments::create($request->all());
        return redirect('/datapayments_sales')->with('success', 'Payments added successfully .');
    }

    public function editdatapayments_sales($id)
    {
        $project = Project::all();
        $data = Payments::find($id);
        return view('Payment.editdatapayments_sales', compact('data', 'project'));
    }

    public function updatedatapayments_sales(Request $request, $id)
    {
        $data = Payments::find($id);
        $data->update($request->all());
        return redirect('/datapayments_sales')->with('success', 'Payments edited successfully .');
    }

    public function deletedatapayments_sales($id)
    {
        $data = Payments::find($id);
        $data->delete();
        return redirect('/datapayments_sales')->with('success', 'Payments deleted successfully .');
    }

    public function exportpdf_sales()
    {
        $data = Payments::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Payments.datapayments-pdf_sales');
        return $pdf->download('data.pdf');
    }
}
