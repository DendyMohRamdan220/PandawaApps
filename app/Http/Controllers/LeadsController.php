<?php

namespace App\Http\Controllers;

use App\Models\Leads;
use Illuminate\Http\Request;
use PDF;

class LeadsController extends Controller
{
    // Portal Management >>
    public function datalead_admin(Request $request)
    {
        $keyword = $request->keyword;
        $data = Leads::where('leads_name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('company_name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('mobile_phone', 'LIKE', '%' . $keyword . '%')
            ->orWhere('next_follow_up', 'LIKE', '%' . $keyword . '%')
            ->orWhere('status', 'LIKE', '%' . $keyword . '%')
            ->paginate(10);
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

    // Portal Sales >>
    public function datalead_sales(Request $request)
    {
        $keyword = $request->keyword;
        $data = Leads::where('leads_name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('company_name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('mobile_phone', 'LIKE', '%' . $keyword . '%')
            ->orWhere('next_follow_up', 'LIKE', '%' . $keyword . '%')
            ->orWhere('status', 'LIKE', '%' . $keyword . '%')
            ->paginate(10);
        return view('Leads.dataleads_sales', compact('data'));
    }

    public function tambahdatalead_sales()
    {
        return view('Leads.tambahdataleads_sales');
    }

    public function insertdatalead_sales(Request $request)
    {
        Leads::create($request->all());
        return redirect('/datalead_sales')->with('success', 'leads added successfully .');
    }

    public function editdatalead_sales($id)
    {
        $data = Leads::find($id);
        return view('Leads.editdataleads_sales', compact('data'));
    }

    public function updatedatalead_sales(Request $request, $id)
    {
        $data = Leads::find($id);
        $data->update($request->all());
        return redirect('/datalead_sales')->with('success', 'Leads edited successfully .');
    }

    public function deletedatalead_sales($id)
    {
        $data = Leads::find($id);
        $data->delete();
        return redirect('/datalead_sales')->with('success', 'leads deleted successfully .');
    }
}
