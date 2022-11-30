<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Ticket;
use App\Models\project;
use App\Models\Invoices;
use App\Models\Attendance;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data = User::all();
        $totalclient = User::where('level', 'Client')->count();
        $totalemployee = User::where('level', 'Employee')->count();
        $totalproject = project::count();
        $dueinvoices = Invoices::count();
        $hourslogged = Attendance::where('officehours')->count();
        $pendingtasks = Task::where('status', 'pending')->count();
        $todayattendance = Attendance::count();
        $unresolvedticket = Ticket::where('status', 'progres')->count();
        return view('dashboard', compact('data'), [
            'totalclient' => $totalclient,
            'totalemployee' => $totalemployee,
            'totalproject' => $totalproject,
            'dueinvoices' => $dueinvoices,
            'hourslogged' => $hourslogged,
            'pendingtasks' => $pendingtasks,
            'todayattendance' => $todayattendance,
            'unresolvedticket' => $unresolvedticket,
        ]);
    }

    public function dashboardv1()
    {

        $data = User::all();
        $totaltiket = Ticket::count();
        $totalordertiket = Ticket::where('status', 'order')->count();
        $totalprogrestiket = Ticket::where('status', 'progres')->count();
        $totalpendingtiket = Ticket::where('status', 'pending')->count();
        $totaldonetiket = Ticket::where('status', 'done')->count();
        $totalcanceltiket = Ticket::where('status', 'cancel')->count();


        return view('dashboardv1', compact('data'), [
            'totaltiket' => $totaltiket,
            'totalordertiket' => $totalordertiket,
            'totalprogrestiket' => $totalprogrestiket,
            'totalpendingtiket' => $totalpendingtiket,
            'totaldonetiket' => $totaldonetiket,
            'totalcanceltiket' => $totalcanceltiket,
        ]);

    }

    public function dashboardv2()
    {

        $data = User::all();

        return view('dashboardv2', compact('data'), [
            //
        ]);

    }
}
