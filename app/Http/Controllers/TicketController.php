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
        Ticket::create($request->all());
        return redirect('/ticket_admin')->with('success', 'tickets added successfully .');
    }

    public function tampildatatiket_admin($id)
    {
        $data = Ticket::find($id);
        return view('Tickets.tampildatatiket', compact('data'));
    }

    public function updatedataticket_admin(Request $request, $id)
    {
        $data = Ticket::find($id);
        $data->update($request->all());
        return redirect('/ticket_admin')->with('success', 'tickets edited successfully .');
    }

    public function deleteticket($id)
    {
        $data = Ticket::find($id);
        $data->delete();
        return redirect('/ticket_admin')->with('success', 'tickets deleted successfully .');
    }

    public function exportpdf()
    {
        $data = Ticket::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Tickets.datatiket-pdf');
        return $pdf->download('data.pdf');
    }
}
