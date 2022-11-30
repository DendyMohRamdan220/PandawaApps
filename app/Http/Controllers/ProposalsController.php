<?php

namespace App\Http\Controllers;

use App\Models\Proposals;
use Illuminate\Http\Request;
use PDF;

class ProposalsController extends Controller
{
    //
    public function dataproposal_admin(Request $request)
    {
        if ($request->has('search')) {
            $data = Proposals::where('proposal_name', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Proposals::paginate(5);
        }
        return view('Proposal.dataproposal', compact('data'));
    }

    public function tambahdataproposal_admin()
    {
        return view('Proposal.tambahdataproposal');
    }

    public function insertdataproposal_admin(Request $request)
    {
        Proposals::create($request->all());
        return redirect('/dataproposal_admin')->with('success', 'Proposal added successfully .');
    }

    public function editdataproposal_admin($id)
    {
        $data = Proposals::find($id);
        return view('Proposal.tampildataproposal', compact('data'));
    }

    public function updatedataproposal_admin(Request $request, $id)
    {
        $data = Proposals::find($id);
        $data->update($request->all());
        return redirect('/dataproposal_admin')->with('success', 'Proposal edited successfully .');
    }

    public function deletedataproposal_admin($id)
    {
        $data = Proposals::find($id);
        $data->delete();
        return redirect('/dataproposal_admin')->with('success', 'Proposal deleted successfully .');
    }

    public function exportpdf_admin()
    {
        $data = Proposals::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Proposal.dataproposal-pdf_admin');
        return $pdf->download('data.pdf');
    }
}