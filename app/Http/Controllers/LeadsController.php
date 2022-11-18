<?php

namespace App\Http\Controllers;

use App\Models\Leads;
use Illuminate\Http\Request;
use PDF;

class LeadsController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = Leads::where('leads_name', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Leads::paginate(5);
        }
        return view('Leads.dataleads', compact('data'));
    }

    public function tambahleads()
    {
        return view('Leads.tambahdataleads');
    }

    public function insertdataleads(Request $request)
    {
        Leads::create($request->all());
        return redirect()->route('leads')->with('success', 'leads added successfully .');
    }

    public function tampildataleads($id)
    {
        $data = Leads::find($id);
        return view('Leads.tampildataleads', compact('data'));
    }

    public function updatedataleads(Request $request, $id)
    {
        $data = Leads::find($id);
        $data->update($request->all());
        return redirect()->route('leads')->with('success', 'leads edited successfully .');
    }

    public function delete($id)
    {
        $data = Leads::find($id);
        $data->delete();
        return redirect()->route('leads')->with('success', 'leads deleted successfully .');
    }

    public function exportpdf()
    {
        $data = Leads::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Leads.dataleads-pdf');
        return $pdf->download('data.pdf');
    }
}
