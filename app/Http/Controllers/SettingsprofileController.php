<?php

namespace App\Http\Controllers;
use App\Models\Settingsprofile;
use Illuminate\Http\Request;

class SettingsprofileController extends Controller
{
    //
    public function dataprofilSettings_admin(Request $request)
    {
        if ($request->has('search')) {
            $data = Settingsprofile::where('ProfilSetting_name', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Settingsprofile::paginate(5);
        }
        return view('ProfilSetting.dataprofilSettings', compact('data'));
    }

}
