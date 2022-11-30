<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function dataSettings_admin(Request $request)
    {
        if ($request->has('search')) {
            $data = Settings::where('setting_name', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Settings::paginate(5);
        }
        return view('Settings.dataSettings', compact('data'));
    }
}
