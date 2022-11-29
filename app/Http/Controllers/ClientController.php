<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    public function dataclient_admin(Request $request)
    {
        if ($request->has('search')) {
            $data = Client::where('ussername', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Client::paginate(5);
        }
        return view('Clients.dataclient', compact('data'));
    }

    public function tambahdataclient_admin()
    {
        return view('Clients.tambahclient');
    }

    public function insertdataclient_admin(Request $request)
    {
        Client::create($request->all());
        return redirect('dataclient_admin')->with('success', 'client added successfully .');
    }

    public function editdataclient_admin($id)
    {
        $data = Client::find($id);
        return view('Clients.tampildataclient', compact('data'));
    }

    public function updatedataclient_admin(Request $request, $id)
    {
        $data = Client::find($id);
        $data->update($request->all());
        return redirect('/dataclient_admin')->with('success', 'client update successfully .');
    }

    public function deletedataclient_admin($id)
    {
        $data = Client::find($id);
        $data->delete();
        return redirect('dataclient_admin')->with('success', 'client deleted successfully .');
    }

    //employee
    public function dataclient_employee(Request $request)
    {
    if ($request->has('search')) {
    $data = Client::where('clientname', 'LIKE', '%' . $request->search . '%')->paginate(5);
    } else {
    $data = Client::paginate(5);
    }
    return view('Clients.dataclient_employee', compact('data'));
    }
}
