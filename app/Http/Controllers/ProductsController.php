<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = Products::where('name', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Products::paginate(5);
        }
        return view('dataproduk', compact('data'));
    }

    public function tambahproduk()
    {
        return view('tambahdataproduk');
    }

    public function insertdataproduk(Request $request)
    {
        Products::create($request->all());
        return redirect()->route('products')->with('success', 'Product added successfully .');
    }

    public function tampildataproduk($id)
    {
        $data = Products::find($id);
        return view('tampildataproduk', compact('data'));
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
        $pdf = PDF::loadview('dataproduk-pdf');
        return $pdf->download('data.pdf');
    }
}
