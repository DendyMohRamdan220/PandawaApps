<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use PDF;

class ProductsController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = Products::where('product', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Products::paginate(5);
        }
        return view('Products.dataproduk', compact('data'));
    }

    public function tambahproduk()
    {
        return view('Products.tambahdataproduk');
    }

    public function insertdataproduk(Request $request)
    {
        Products::create($request->all());
        return redirect()->route('products')->with('success', 'Product added successfully .');
    }

    public function tampildataproduk($id)
    {
        $data = Products::find($id);
        return view('Products.tampildataproduk', compact('data'));
    }

    public function updatedataproduk(Request $request, $id)
    {
        $data = Products::find($id);
        $data->update($request->all());
        return redirect()->route('products')->with('success', 'Products edited successfully .');
    }

    public function delete($id)
    {
        $data = Products::find($id);
        $data->delete();
        return redirect()->route('products')->with('success', 'Products deleted successfully .');
    }

    public function exportpdf()
    {
        $data = Products::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Products.dataproduk-pdf');
        return $pdf->download('data_products.pdf');
    }
}
