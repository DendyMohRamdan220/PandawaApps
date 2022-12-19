<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Ticket;
use App\Models\project;
use App\Models\Invoices;
use App\Models\Payments;
use App\Models\Estimates;
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
        $unresolvedticket = Ticket::count();
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
        $totalproject = project::count();
        $pendingtasks = Task::count();
        $unresolvedticket = Ticket::count();
        return view('dashboardv1', compact('data'), [
            'totalproject' => $totalproject,
            'pendingtasks' => $pendingtasks,
            'unresolvedticket' => $unresolvedticket,
        ]);

    }

    public function dashboardv2()
    {

        $data = User::all();
        $totalproject = project::count();
        $dueinvoices = Invoices::count();
        $unresolvedticket = Ticket::where('status', 'progres')->count();
        return view('dashboardv2', compact('data'), [
            'totalproject' => $totalproject,
            'dueinvoices' => $dueinvoices,
            'unresolvedticket' => $unresolvedticket,
        ]);

    }

    public function dashboardv3()
    {

        $data = User::all();
        $totalestimates = Estimates::count();
        $totalinvoices = Invoices::count();
        $totalpayments = Payments::count();
        return view('dashboardv3', compact('data'), [
            'totalestimates' => $totalestimates,
            'totalinvoices' => $totalinvoices,
            'totalpayments' => $totalpayments,
        ]);

    }
}
