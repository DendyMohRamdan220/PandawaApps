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
        $totallowtiket = Ticket::where('others', 'Low')->count();
        $totalmediumtiket = Ticket::where('others', 'Medium')->count();
        $totalhightiket = Ticket::where('others', 'High')->count();
        $totalurgenttiket = Ticket::where('others', 'Urgent')->count();

        return view('dashboardv1', compact('data'), [
            'totaltiket' => $totaltiket,
            'totallowtiket' => $totallowtiket,
            'totalmediumtiket' => $totalmediumtiket,
            'totalhightiket' => $totalhightiket,
            'totalurgenttiket' => $totalurgenttiket,
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
