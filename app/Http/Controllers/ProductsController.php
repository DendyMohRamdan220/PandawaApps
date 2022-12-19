<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use PDF;

class ProductsController extends Controller
{
    // Portal Management >>
    public function dataproduk_admin(Request $request)
    {
        $keyword = $request->keyword;
        $data = Products::where('name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('price', 'LIKE', '%' . $keyword . '%')
            ->paginate(10);
        return view('Products.dataproduk', compact('data'));
    }

    public function tambahdataproduk_admin()
    {
        return view('Products.tambahdataproduk');
    }

    public function insertdataproduk_admin(Request $request)
    {
        Products::create($request->all());
        return redirect('/dataproduk_admin')->with('success', 'Product added successfully .');
    }

    public function editdataproduk_admin($id)
    {
        $data = Products::find($id);
        return view('Products.tampildataproduk', compact('data'));
    }

    public function updatedataproduk_admin(Request $request, $id)
    {
        $data = Products::find($id);
        $data->update($request->all());
        return redirect('/dataproduk_admin')->with('success', 'Products edited successfully .');
    }

    public function deletedataproduk_admin($id)
    {
        $data = Products::find($id);
        $data->delete();
        return redirect('/dataproduk_admin')->with('success', 'Products deleted successfully .');
    }

    public function exportpdf_admin()
    {
        $data = Products::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Products.dataproduk-pdf_admin');
        return $pdf->download('data_products.pdf');
    }

    // Portal Sales >>
    public function dataproduk_sales(Request $request)
    {
        $keyword = $request->keyword;
        $data = Products::where('name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('price', 'LIKE', '%' . $keyword . '%')
            ->paginate(10);
        return view('Products.dataproduk_sales', compact('data'));
    }

    public function tambahdataproduk_sales()
    {
        return view('Products.tambahdataproduk_sales');
    }

    public function insertdataproduk_sales(Request $request)
    {
        Products::create($request->all());
        return redirect('/dataproduk_sales')->with('success', 'Product added successfully .');
    }

    public function editdataproduk_sales($id)
    {
        $data = Products::find($id);
        return view('Products.editdataproduk_sales', compact('data'));
    }

    public function updatedataproduk_sales(Request $request, $id)
    {
        $data = Products::find($id);
        $data->update($request->all());
        return redirect('/dataproduk_sales')->with('success', 'Products edited successfully .');
    }

    public function deletedataproduk_sales($id)
    {
        $data = Products::find($id);
        $data->delete();
        return redirect('/dataproduk_sales')->with('success', 'Products deleted successfully .');
    }

    public function exportpdf_sales()
    {
        $data = Products::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Products.dataproduk-pdf_sales');
        return $pdf->download('data_products.pdf');
    }
}
