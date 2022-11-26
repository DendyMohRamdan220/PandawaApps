<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {

        $data = User::all();
        return view('dashboard', compact('data'));

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
