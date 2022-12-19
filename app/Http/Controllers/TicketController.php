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
        $totalordertiket = Ticket::where('status', 'order')->count();
        $totalprogrestiket = Ticket::where('status', 'progres')->count();
        $totalpendingtiket = Ticket::where('status', 'pending')->count();
        $totaldonetiket = Ticket::where('status', 'done')->count();
        $totalcanceltiket = Ticket::where('status', 'cancel')->count();

        $keyword = $request->keyword;
        $data = Ticket::where('ticket_subject', 'LIKE', '%' . $keyword . '%')
            ->orWhere('description', 'LIKE', '%' . $keyword . '%')
            ->orWhere('status', 'LIKE', '%' . $keyword . '%')
            ->paginate(10);
        return view('Tickets.datatiket', compact('data'), [
            'totaltiket' => $totaltiket,
            'totalordertiket' => $totalordertiket,
            'totalprogrestiket' => $totalprogrestiket,
            'totalpendingtiket' => $totalpendingtiket,
            'totaldonetiket' => $totaldonetiket,
            'totalcanceltiket' => $totalcanceltiket,
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

    // Portal Employee>>
    public function dataticket_employee(Request $request)
    {
        $totaltiket = Ticket::count();
        $totalordertiket = Ticket::where('status', 'order')->count();
        $totalprogrestiket = Ticket::where('status', 'progres')->count();
        $totalpendingtiket = Ticket::where('status', 'pending')->count();
        $totaldonetiket = Ticket::where('status', 'done')->count();
        $totalcanceltiket = Ticket::where('status', 'cancel')->count();

        $keyword = $request->keyword;
        $data = Ticket::where('ticket_subject', 'LIKE', '%' . $keyword . '%')
            ->orWhere('description', 'LIKE', '%' . $keyword . '%')
            ->orWhere('status', 'LIKE', '%' . $keyword . '%')
            ->paginate(10);
        return view('Tickets.dataticket_employee', compact('data'), [
            'totaltiket' => $totaltiket,
            'totalordertiket' => $totalordertiket,
            'totalprogrestiket' => $totalprogrestiket,
            'totalpendingtiket' => $totalpendingtiket,
            'totaldonetiket' => $totaldonetiket,
            'totalcanceltiket' => $totalcanceltiket,
        ]);
    }

    public function tambahdataticket_employee()
    {
        return view('Tickets.tambahdataticket_employee');
    }

    public function insertdataticket_employee(Request $request)
    {
        Ticket::create($request->all());
        return redirect('/dataticket_employee')->with('success', 'tickets added successfully .');
    }

    public function editdataticket_employee($id)
    {
        $data = Ticket::find($id);
        return view('Tickets.editdataticket_employee', compact('data'));
    }

    public function updatedataticket_employee(Request $request, $id)
    {
        $data = Ticket::find($id);
        $data->update($request->all());
        return redirect('/dataticket_employee')->with('success', 'tickets edited successfully .');
    }

    public function deletedataticket_employee($id)
    {
        $data = Ticket::find($id);
        $data->delete();
        return redirect('/dataticket_employee')->with('success', 'tickets deleted successfully .');
    }

    // Portal Clients>>
    public function dataticket_client(Request $request)
    {
        $totaltiket = Ticket::count();
        $totalordertiket = Ticket::where('status', 'order')->count();
        $totalprogrestiket = Ticket::where('status', 'progres')->count();
        $totalpendingtiket = Ticket::where('status', 'pending')->count();
        $totaldonetiket = Ticket::where('status', 'done')->count();
        $totalcanceltiket = Ticket::where('status', 'cancel')->count();

        $keyword = $request->keyword;
        $data = Ticket::where('ticket_subject', 'LIKE', '%' . $keyword . '%')
            ->orWhere('description', 'LIKE', '%' . $keyword . '%')
            ->orWhere('status', 'LIKE', '%' . $keyword . '%')
            ->paginate(10);
        return view('Tickets.dataticket_client', compact('data'), [
            'totaltiket' => $totaltiket,
            'totalordertiket' => $totalordertiket,
            'totalprogrestiket' => $totalprogrestiket,
            'totalpendingtiket' => $totalpendingtiket,
            'totaldonetiket' => $totaldonetiket,
            'totalcanceltiket' => $totalcanceltiket,
        ]);
    }

    public function tambahdataticket_client()
    {
        return view('Tickets.tambahdataticket_client');
    }

    public function insertdataticket_client(Request $request)
    {
        Ticket::create($request->all());
        return redirect('/dataticket_client')->with('success', 'tickets added successfully .');
    }

    public function editdataticket_client($id)
    {
        $data = Ticket::find($id);
        return view('Tickets.editdataticket_client', compact('data'));
    }

    public function updatedataticket_client(Request $request, $id)
    {
        $data = Ticket::find($id);
        $data->update($request->all());
        return redirect('/dataticket_client')->with('success', 'tickets edited successfully .');
    }

    public function deletedataticket_client($id)
    {
        $data = Ticket::find($id);
        $data->delete();
        return redirect('/dataticket_client')->with('success', 'tickets deleted successfully .');
    }

    public function exportpdf_client()
    {
        $data = Ticket::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('Tickets.dataticket-pdf_client');
        return $pdf->download('data.pdf');
    }
}
