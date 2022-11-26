<?php

namespace App\Http\Controllers;

use App\Models\Leads;
use Illuminate\Http\Request;
use PDF;

class LeadsController extends Controller
{
    //
    public function datalead_admin(Request $request)
    {
        if ($request->has('search')) {
            $data = Leads::where('leads_name', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Leads::paginate(5);
        }
        return view('Leads.dataleads', compact('data'));
    }

    public function tambahdatalead_admin()
    {
        return view('Leads.tambahdataleads');
    }

    public function insertdatalead_admin(Request $request)
    {
        Leads::create($request->all());
        return redirect('/datalead_admin')->with('success', 'leads added successfully .');
    }

    public function editdatalead_admin($id)
    {
        $data = Leads::find($id);
        return view('Leads.tampildataleads', compact('data'));
    }

    public function updatedatalead_admin(Request $request, $id)
    {
        $data = Leads::find($id);
        $data->update($request->all());
        return redirect('/datalead_admin')->with('success', 'Leads edited successfully .');
    }

    public function deletedatalead_admin($id)
    {
        $data = Leads::find($id);
        $data->delete();
        return redirect('/datalead_admin')->with('success', 'leads deleted successfully .');
    }

    public function exportpdf_admin()
    {
        $data = Leads::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Leads.dataleads-pdf_admin');
        return $pdf->download('data.pdf');
    }
}