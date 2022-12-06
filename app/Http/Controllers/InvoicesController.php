<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoices;
use PDF;

class InvoicesController extends Controller
{
    // Portal Management >>
    public function datainvoices_admin(Request $request)
    {
        if ($request->has('search')) {
            $data = Invoices::where('invoice_number', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Invoices::paginate(5);
        }
        return view('Invoices.datainvoices', compact('data'));
    }

    public function tambahdatainvoices_admin()
    {
        return view('Invoices.tambahdatainvoices');
    }

    public function insertdatainvoices_admin(Request $request)
    {
        Invoices::create($request->all());
        return redirect('/datainvoices_admin')->with('success', 'Invoices added successfully .');
    }

    public function editdatainvoices_admin($id)
    {
        $data = Invoices::find($id);
        return view('Invoices.tampildatainvoices', compact('data'));
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
        $data = Invoices::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Invoices.datainvoices-pdf_admin');
        return $pdf->download('data_Invoices.pdf');
    }

    // Portal Client >>
    public function datainvoices_client(Request $request)
    {
        if ($request->has('search')) {
            $data = Invoices::where('invoice_number', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Invoices::paginate(5);
        }
        return view('Invoices.datainvoices_client', compact('data'));
    }

    public function exportpdf_client()
    {
        $data = Invoices::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Invoices.datainvoices-pdf_client');
        return $pdf->download('data_Invoices.pdf');
    }
}
