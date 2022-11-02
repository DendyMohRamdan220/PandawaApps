<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketEmployeeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = Ticket::where('ticket_subject', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Ticket::paginate(5);
        }
        return view('datatiketemployee', compact('data'));
    }

    public function tampildatatiket($id)
    {
        $data = ticket::find($id);
        return view('tampildatatiket', compact('data'));
    }

    public function updatedatatiket(Request $request, $id)
    {
        $data = ticket::find($id);
        $data->update($request->all());
        return redirect()->route('tiket')->with('success', 'tickets edited successfully .');
    }
}
