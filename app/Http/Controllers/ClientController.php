<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    public function dataclient(Request $request)
    {
        if ($request->has('search')) {
            $data = Client::where('clientname', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Client::paginate(5);
        }
        return view('Clients.dataclient', compact('data'));
    }

    public function tambahdataclient()
    {
        return view('Clients.tambahclient');
    }

    public function insertdataclient(Request $request)
    {
        Client::create($request->all());
        return redirect()->route('dataclient_admin')->with('success', 'client added successfully .');
    }

    public function editdataclient($id)
    {
        $data = Client::find($id);
        return view('Clients.tampildataclient', compact('data'));
    }

    public function updatedataclient(Request $request, $id)
    {
        $data = Client::find($id);
        $data->update($request->all());
        return redirect()->route('dataclient_admin')->with('success', 'client update successfully .');
    }

    public function deletedataclient($id)
    {
        $data = Client::find($id);
        $data->delete();
        return redirect()->route('dataclient_admin')->with('success', 'client deleted successfully .');
    }
}
