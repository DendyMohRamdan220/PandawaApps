<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use PDF;

class TicketController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = Ticket::where('ticket_subject', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Ticket::paginate(5);
        }
        return view('datatiket', compact('data'));
    }

    public function tambahtiket()
    {
        return view('tambahdatatiket');
    }

    public function insertdatatiket(Request $request)
    {
        ticket::create($request->all());
        return redirect()->route('tiket')->with('success', 'tickets added successfully .');
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

    public function delete($id)
    {
        $data = ticket::find($id);
        $data->delete();
        return redirect()->route('tiket')->with('success', 'tickets deleted successfully .');
    }

    public function exportpdf()
    {
        $data = ticket::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('datatiket-pdf');
        return $pdf->download('data.pdf');
    }
}
