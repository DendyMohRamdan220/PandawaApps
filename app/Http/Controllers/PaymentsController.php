<?php

namespace App\Http\Controllers;

use App\Models\Payments;
use Illuminate\Http\Request;
use PDF;

class PaymentsController extends Controller
{
    //
    public function datapayments_admin(Request $request)
    {
        if ($request->has('search')) {
            $data = Payments::where('payment_number', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Payments::paginate(5);
        }
        return view('Payment.datapayments', compact('data'));
    }

    public function tambahdatapayments_admin()
    {
        return view('Payment.tambahdatapayments');
    }

    public function insertdatapayments_admin(Request $request)
    {
        Payments::create($request->all());
        return redirect('/datapayments_admin')->with('success', 'Payments added successfully .');
    }

    public function editdatapayments_admin($id)
    {
        $data = Payments::find($id);
        return view('Payment.tampildatapayments', compact('data'));
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

}