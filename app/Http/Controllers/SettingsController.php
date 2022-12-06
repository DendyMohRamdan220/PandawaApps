<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function dataSettings_admin()
    {
        $data = User::all();
        return view('Settings.dataSettings', compact('data'));
    }
    
}
