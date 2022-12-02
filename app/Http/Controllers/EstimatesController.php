<?php

namespace App\Http\Controllers;

use App\Models\Estimates;
use App\Models\Products;
use App\Models\Client;
use Illuminate\Http\Request;
use PDF;

class EstimatesController extends Controller
{
    //
    public function dataestimate_admin(Request $request)
    {
        if ($request->has('search')) {
            $data = Estimates::where('leads_name', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Estimates::paginate(5);
        }
        return view('Estimate.dataestimate', compact('data'));
    }

    public function tambahdataestimate_admin()
    {
        $client = Client::all();
        $products = Products::all();
        return view('Estimate.tambahdataestimate', compact('client', 'products'));
    }

    public function insertdataestimate_admin(Request $request)
    {
        Estimates::create($request->all());
        return redirect('/dataestimate_admin')->with('success', 'Estimates added successfully .');
    }

    public function editdataestimate_admin($id)
    {
        $client = Client::all();
        $products = Products::all();
        $data = Estimates::find($id);
        return view('Estimate.tampildataestimate', compact('data', 'client', 'products'));
    }

    public function updatedataestimate_admin(Request $request, $id)
    {
        $data = Estimates::find($id);
        $data->update($request->all());
        return redirect('/dataestimate_admin')->with('success', 'Estimates edited successfully .');
    }

    public function deletedataestimate_admin($id)
    {
        $data = Estimates::find($id);
        $data->delete();
        return redirect('/dataestimate_admin')->with('success', 'Estimates deleted successfully .');
    }

    public function exportpdf_admin()
    {
        $data = Estimates::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Estimate.dataestimate-pdf_admin');
        return $pdf->download('data.pdf');
    }
}