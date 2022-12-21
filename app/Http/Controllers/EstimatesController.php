<?php

namespace App\Http\Controllers;

use App\Models\Estimates;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class EstimatesController extends Controller
{
    // Portal Management >>
    public function dataestimate_admin(Request $request)
    {
        $keyword = $request->keyword;
        $data = Estimates::with('user', 'products')
            ->where('total', 'LIKE', '%' . $keyword . '%')
            ->orWhere('status', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->orWhereHas('products', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(10);
        return view('Estimate.dataestimate', compact('data'));
    }

    public function tambahdataestimate_admin()
    {
        $user = User::all();
        $products = Products::all();
        return view('Estimate.tambahdataestimate', compact('user', 'products'));
    }

    public function insertdataestimate_admin(Request $request)
    {
        Estimates::create($request->all());
        return redirect('/dataestimate_admin')->with('success', 'Estimates added successfully .');
    }

    public function editdataestimate_admin($id)
    {
        $user = User::all();
        $products = Products::all();
        $data = Estimates::find($id);
        return view('Estimate.tampildataestimate', compact('data', 'user', 'products'));
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
        $pdf = PDF::loadview('Estimate.dataestimate-pdf');
        return $pdf->download('data.pdf');
    }

    // Portal Client >>
    public function dataestimate_client(Request $request)
    {
        $keyword = $request->keyword;
        $data = Estimates::with('user', 'products')
            ->where('total', 'LIKE', '%' . $keyword . '%')
            ->orWhere('status', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->orWhereHas('products', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(10);
        return view('Estimate.dataestimate_client', compact('data'));
    }

    public function exportpdf_client()
    {
        $data = Estimates::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Estimate.dataestimate-pdf_client');
        return $pdf->download('data.pdf');
    }

    // Portal Sales >>
    public function dataestimate_sales(Request $request)
    {
        $keyword = $request->keyword;
        $data = Estimates::with('user', 'products')
            ->where('total', 'LIKE', '%' . $keyword . '%')
            ->orWhere('status', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('user', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->orWhereHas('products', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(10);
        return view('Estimate.dataestimate_sales', compact('data'));
    }

    public function tambahdataestimate_sales()
    {
        $user = User::all();
        $products = Products::all();
        return view('Estimate.tambahdataestimate_sales', compact('user', 'products'));
    }

    public function insertdataestimate_sales(Request $request)
    {
        Estimates::create($request->all());
        return redirect('/dataestimate_sales')->with('success', 'Estimates added successfully .');
    }

    public function editdataestimate_sales($id)
    {
        $user = User::all();
        $products = Products::all();
        $data = Estimates::find($id);
        return view('Estimate.tampildataestimate_sales', compact('data', 'user', 'products'));
    }

    public function updatedataestimate_sales(Request $request, $id)
    {
        $data = Estimates::find($id);
        $data->update($request->all());
        return redirect('/dataestimate_sales')->with('success', 'Estimates edited successfully .');
    }

    public function deletedataestimate_sales($id)
    {
        $data = Estimates::find($id);
        $data->delete();
        return redirect('/dataestimate_sales')->with('success', 'Estimates deleted successfully .');
    }

    public function exportpdf_sales()
    {
        $data = Estimates::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Estimate.dataestimate-pdf_sales');
        return $pdf->download('data.pdf');
    }
}