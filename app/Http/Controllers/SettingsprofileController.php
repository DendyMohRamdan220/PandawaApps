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
    public function editdatauserprofile(Request $request)
    {
        return view('ProfilSetting.dataprofilSettings', [
            'user' => $request->user()
        ]);
    }

    public function updatedatauserprofile1(Request $request)
{
    $request->user()->update(
        $request->all()
    );

    return redirect('profile.edit');
}

    //edit data user
    // public function editdatauserprofile($idUser)
    // {
    //     $dataUser = User::find($idUser);
    //     return view("ProfilSetting.dataprofilSettings", ['data' => $dataUser]);
    // }

    //Update data user
    public function updatedatauserprofile(Request $x)
    {
        //Validasi
        $messages = [
            'name.required' => 'Nama tidak boleh kosong!',
            'email.required' => 'Email tidak boleh kosong!',
            'password.required' => 'Password tidak boleh kosong!',
            'level.required' => 'level user tidak boleh kosong!',
            'image' => 'File harus berupa tipe: jpeg,png,jpg|max:2048',
        ];
        $cekValidasi = $x->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'level' => 'required',
            'file' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ], $messages);

        $file = $x->file('file');
        if (file_exists($file)) {
            $nama_file = time() . "-" . $file->getClientOriginalName();
            $folder = 'file';
            $file->move($folder, $nama_file);
            $path = $folder . "/" . $nama_file;
            //delete
            $data = User::all()->first();
            File::delete($data->file);
        } else {
            $path = $x->pathFile;
        }

        User::all()->update([
            'name' => $x->name,
            'email' => $x->email,
            'password' => Hash::make($x->password),
            'level' => $x->level,
            'file' => $path,
        ]);
        Alert::success('Berasil Mengubah User');
        return redirect('/dataprofilSettings_admin')->with('toast_success', 'Data berhasil di update!');
    }
}
