<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = Client::where('clientname', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Client::paginate(5);
        }
        return view('dataclient', compact('data'));
    }

    public function tambahclient()
    {
        return view('tambahclient');
    }

    public function insertdataclient(Request $request)
    {
        Client::create($request->all());
        return redirect()->route('client')->with('success', 'client added successfully .');
    }

    public function tampildataclient($id)
    {
        $data = Client::find($id);
        return view('tampildataclient', compact('data'));
    }

    public function updatedataclient(Request $request, $id)
    {
        $data = Client::find($id);
        $data->update($request->all());
        return redirect()->route('client')->with('success', 'client update successfully .');
    }

    public function deleteclient($id)
    {
        $data = Client::find($id);
        $data->delete();
        return redirect()->route('client')->with('success', 'client deleted successfully .');
    }
}
