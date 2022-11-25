<?php

namespace App\Http\Controllers;

use App\Models\Proposals;
use Illuminate\Http\Request;
use PDF;

class ProposalsController extends Controller
{
    //
    public function index(Request $request)
    {

        if ($request->has('search')) {
            $data = Proposals::where('proposals', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } 
        else {
            $data = Proposals::paginate(5);
        }
        return view('Proposal.dataproposal', compact('data'));
    }

    public function tambahproposal()
    {
        return view('Proposal.tambahdataproposal');
    }

    public function insertdataproposal(Request $request)
    {
        Proposals::create($request->all());
        return redirect()->route('proposals')->with('success', 'Proposal added successfully .');
    }

    public function tampildataproposal($id)
    {
        $data = Proposals::find($id);
        return view('Proposal.tampildataproposal', compact('data'));
    }

    public function updatedataproposal(Request $request, $id)
    {
        $data = Proposals::find($id);
        $data->update($request->all());
        return redirect()->route('proposals')->with('success', 'Proposals edited successfully .');
    }

    public function delete($id)
    {
        $data = Proposals::find($id);
        $data->delete();
        return redirect()->route('proposals')->with('success', 'Proposals deleted successfully .');
    }

    public function exportpdf()
    {
        $data = Proposals::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Proposal.dataproposal-pdf');
        return $pdf->download('data_proposal.pdf');
    }
}
