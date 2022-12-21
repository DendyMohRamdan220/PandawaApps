<?php

namespace App\Http\Controllers;

use App\Models\Leads;
use App\Models\Products;
use App\Models\Proposals;
use Illuminate\Http\Request;
use PDF;

class ProposalsController extends Controller
{
    // Portal Management >>
    public function dataproposal_admin(Request $request)
    {
        $keyword = $request->keyword;
        $data = Proposals::with('leads', 'products')
            ->where('proposal_name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('total', 'LIKE', '%' . $keyword . '%')
            ->orWhere('created_at', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('leads', function ($query) use ($keyword) {
                $query->where('leads_name', 'LIKE', '%' . $keyword . '%');
            })
            ->orWhereHas('products', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(10);
        return view('Proposal.dataproposal', compact('data'));
    }

    public function tambahdataproposal_admin()
    {
        $leads = Leads::all();
        $products = Products::all();
        return view('Proposal.tambahdataproposal', compact('leads', 'products'));
    }

    public function insertdataproposal_admin(Request $request)
    {
        Proposals::create($request->all());
        return redirect('/dataproposal_admin')->with('success', 'Proposal added successfully .');
    }

    public function editdataproposal_admin($id)
    {
        $products = Products::all();
        $leads = Leads::all();
        $data = Proposals::find($id);
        return view('Proposal.tampildataproposal', compact('data', 'leads', 'products'));
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
        $pdf = PDF::loadview('Proposal.dataproposal-pdf');
        return $pdf->download('data.pdf');
    }

    // Portal Client >>
    public function dataproposal_client(Request $request)
    {
        if ($request->has('search')) {
            $data = Proposals::where('proposal_name', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Proposals::paginate(5);
        }
        return view('Proposal.dataproposal_client', compact('data'));
    }

    public function tambahdataproposal_client()
    {
        $leads = Leads::all();
        $products = Products::all();
        return view('Proposal.tambahdataproposal_client', compact('leads', 'products'));
    }

    public function insertdataproposal_client(Request $request)
    {
        Proposals::create($request->all());
        return redirect('/dataproposal_client')->with('success', 'Proposal added successfully .');
    }

    public function editdataproposal_client($id)
    {
        $products = Products::all();
        $leads = Leads::all();
        $data = Proposals::find($id);
        return view('Proposal.editdataproposal_client', compact('data', 'leads', 'products'));
    }

    public function updatedataproposal_client(Request $request, $id)
    {
        $data = Proposals::find($id);
        $data->update($request->all());
        return redirect('/dataproposal_client')->with('success', 'Proposal edited successfully .');
    }

    public function deletedataproposal_client($id)
    {
        $data = Proposals::find($id);
        $data->delete();
        return redirect('/dataproposal_client')->with('success', 'Proposal deleted successfully .');
    }

    public function exportpdf_client()
    {
        $data = Proposals::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Proposal.dataproposal-pdf_client');
        return $pdf->download('data.pdf');
    }

    // Portal Sales >>
    public function dataproposal_sales(Request $request)
    {
        if ($request->has('search')) {
            $data = Proposals::where('proposal_name', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Proposals::paginate(5);
        }
        return view('Proposal.dataproposal_sales', compact('data'));
    }

    public function tambahdataproposal_sales()
    {
        $leads = Leads::all();
        $products = Products::all();
        return view('Proposal.tambahdataproposal_sales', compact('leads', 'products'));
    }

    public function insertdataproposal_sales(Request $request)
    {
        Proposals::create($request->all());
        return redirect('/dataproposal_sales')->with('success', 'Proposal added successfully .');
    }

    public function editdataproposal_sales($id)
    {
        $products = Products::all();
        $leads = Leads::all();
        $data = Proposals::find($id);
        return view('Proposal.editdataproposal_sales', compact('data', 'leads', 'products'));
    }

    public function updatedataproposal_sales(Request $request, $id)
    {

        $data = Proposals::find($id);
        $data->update($request->all());
        return redirect('/dataproposal_sales')->with('success', 'Proposal edited successfully .');
    }

    public function deletedataproposal_sales($id)
    {
        $data = Proposals::find($id);
        $data->delete();
        return redirect('/dataproposal_sales')->with('success', 'Proposal deleted successfully .');
    }

    public function exportpdf_sales()
    {
        $data = Proposals::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Proposal.dataproposal-pdf_sales');
        return $pdf->download('data.pdf');
    }
}