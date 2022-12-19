<?php

namespace App\Http\Controllers;

use App\Models\User;

class SettingsController extends Controller
{
    public function view_error()
    {
        return view('Layouts.error');
    }

}
