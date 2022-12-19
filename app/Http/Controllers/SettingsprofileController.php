<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\Settingsprofile;
use RealRashid\SweetAlert\Facades\Alert;

class SettingsprofileController extends Controller
{

    // Edit Profile User >>
    // Data User >>
    public function view_editUser()
    {
        $data = User::all();
        return view('ProfileSettings.dataprofile', compact('data'));
    }

    // My Profile User >>
    public function editUser_myprofile(Request $request, $id_user)
    {
        $messages = [
            'email.required' => 'Email cannot be empty!',
            'password.required' => 'Password cannot be empty!',
            'image' => 'File must be: jpeg,png,jpg|max:2048',
        ];

        $rules = $request->validate([
            'email' => 'required',
            'password' => 'required',
            'file' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ], $messages);

        $file = $request->file('file');
        if (file_exists($file)) {
            $nama_file = time() . "-" . $file->getClientOriginalName();
            $folder = 'foto_profil';
            $file->move($folder, $nama_file);
            $path = $folder . "/" . $nama_file;
            //delete
            $data = User::where('id', $id_user)->first();
            File::delete($data->file);
        } else {
            $path = $request->pathFile;
        }
        User::where("id", "$id_user")->update([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'file' => $path,
        ], $rules);
        return redirect('/editUser')->with('success', 'Data berhasil di update!');
    }

    // Edit Profile User >>
    public function editUser_editprofile(Request $request, $id_user)
    {
        $messages = [
            'name.required' => 'Name cannot be empty!',
            'address.required' => 'Address cannot be empty!',
            'mobile.numeric' => 'Mobile cannot be empty!',
            'gender.required' => 'Gender cannot be empty!',
        ];

        $rules = $request->validate([
            'name' => 'required',
            'mobile' => 'numeric',
            'gender' => 'required',
            'address' => 'required',
        ], $messages);

        User::where("id", "$id_user")->update([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'gender' => $request->gender,
            'address' => $request->address,
        ], $rules);
        return redirect('/editUser')->with('success', 'Data berhasil di update!');
    }
}
