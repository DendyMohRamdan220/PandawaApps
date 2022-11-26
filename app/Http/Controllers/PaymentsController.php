<?php

namespace App\Http\Controllers;

use App\Models\Payments;
use Illuminate\Http\Request;
use PDF;

class PaymentsController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = Payment::where('payment_id', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Payment::paginate(5);
        }
        return view('Payment.datapayment', compact('data'));
    }

    public function tambahpayment()
    {
        return view('Payment.tambahdatapayment');
    }

    public function insertdatapayment(Request $request)
    {
        Payment::create($request->all());
        return redirect()->route('payments')->with('success', 'Payment added successfully .');
    }

    public function tampildatapayment($id)
    {
        $data = Payment::find($id);
        return view('Payment.tampildatapayment', compact('data'));
    }

    public function updatedatapayment(Request $request, $id)
    {
        $data = Payment::find($id);
        $data->update($request->all());
        return redirect()->route('payments')->with('success', 'Payment edited successfully .');
    }

    public function delete($id)
    {
        $data = Payment::find($id);
        $data->delete();
        return redirect()->route('payments')->with('success', 'Payment deleted successfully .');
    }

    public function exportpdf()
    {
        $data = Payment::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Payment.datapayment-pdf');
        return $pdf->download('data.pdf');
    }

}
