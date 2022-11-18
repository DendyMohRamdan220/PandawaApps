<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use PDF;

class TicketController extends Controller
{
    public function view_tiket(Request $request)
    {
        $totaltiket = Ticket::count();
        $totallowtiket = Ticket::where('others', 'Low')->count();
        $totalmediumtiket = Ticket::where('others', 'Medium')->count();
        $totalhightiket = Ticket::where('others', 'High')->count();
        $totalurgenttiket = Ticket::where('others', 'Urgent')->count();

        if ($request->has('search')) {
            $data = Ticket::where('ticket_subject', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Ticket::paginate(5);
        }
        return view('Tickets.datatiket', compact('data'), [
            'totaltiket' => $totaltiket,
            'totallowtiket' => $totallowtiket,
            'totalmediumtiket' => $totalmediumtiket,
            'totalhightiket' => $totalhightiket,
            'totalurgenttiket' => $totalurgenttiket,
        ]);
    }

    public function tambahtiket()
    {
        return view('Tickets.tambahdatatiket');
    }

    public function insertdatatiket(Request $request)
    {
        ticket::create($request->all());
        return redirect('/ticket_admin')->with('success', 'tickets added successfully .');
    }

    public function tampildatatiket($id)
    {
        $data = ticket::find($id);
        return view('Tickets.tampildatatiket', compact('data'));
    }

    public function updatedatatiket(Request $request, $id)
    {
        $data = ticket::find($id);
        $data->update($request->all());
        return redirect('/ticket_admin')->with('success', 'tickets edited successfully .');
    }

    public function deletetiket($id)
    {
        $data = ticket::find($id);
        $data->delete();
        return redirect('/ticket_admin')->with('success', 'tickets deleted successfully .');
    }

    public function exportpdf()
    {
        $data = ticket::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Tickets.datatiket-pdf');
        return $pdf->download('data.pdf');
    }
}
