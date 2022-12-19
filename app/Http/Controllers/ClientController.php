<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
{
    public function datauser_client(Request $request)
    {
        $keyword = $request->keyword;
        $data = User::where('name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('email', 'LIKE', '%' . $keyword . '%')
            ->orWhere('mobile', 'LIKE', '%' . $keyword . '%')
            ->orWhere('created_at', 'LIKE', '%' . $keyword . '%')
            ->paginate();
        return view('Clients.dataclient', compact('data'));
    }

    public function tambahdatauser_client()
    {
        return view('Clients.tambahclient');
    }

    public function insertdatauser_client(Request $x)
    {
        //Validasi
        $messages = [
            'name.required' => 'Name cannot be empty!',
            'email.required' => 'Email cannot be empty!',
            'level.required' => 'User Role cannot be empty!',
            'password.required' => 'Password cannot be empty!',
            'address.required' => 'Address cannot be empty!',
            'mobile.numerik' => 'Mobile cannot be empty!',
            'gender.required' => 'Gender cannot be empty!',
            'image' => 'File must be: jpeg,png,jpg|max:5000',
        ];

        $cekValidasi = $x->validate([
            'name' => 'required',
            'email' => 'required',
            'level' => 'required',
            'password' => 'required|min:4|max:100',
            'address' => 'required',
            'mobile' => 'numeric',
            'gender' => 'required',
            'file' => 'file|image|mimes:jpeg,png,jpg|max:5000',
        ], $messages);

        //$cekValidasi['password'] = Hash::make($cekValidasi['password']);

        $file = $x->file('file');
        if (empty($file)) {
            User::create([
                'name' => $x->name,
                'email' => $x->email,
                'password' => bcrypt($x['password']),
                'level' => $x->level,
                'address' => $x->address,
                'mobile' => $x->mobile,
                'gender' => $x->gender,
            ]);
        } else {
            $nama_file = time() . "-" . $file->getClientOriginalName();
            $ekstensi = $file->getClientOriginalExtension();
            $ukuran = $file->getSize();
            $patAsli = $file->getRealPath();
            $namaFolder = 'file';
            $file->move($namaFolder, $nama_file);
            $pathPublic = $namaFolder . "/" . $nama_file;

            User::create([
                'name' => $x->name,
                'email' => $x->email,
                'password' => bcrypt($x['password']),
                'level' => $x->level,
                'address' => $x->address,
                'mobile' => $x->mobile,
                'gender' => $x->gender,
                'file' => $pathPublic,
            ], $cekValidasi);
        }
        Alert::success('Berasil Menambah User');
        return redirect('/dataclient_admin')->with('toast_success', 'Data berhasil tambah!');
    }

    //edit data user
    public function editdatauser_client($id)
    {
        $dataUser = User::find($id);
        return view("Clients.tampildataclient", ['data' => $dataUser]);
    }

    //Update data user
    public function updatedatauser_client($id, Request $x)
    {
        //Validasi
        $messages = [
            'name.required' => 'Nama cannot be empty!',
            'email.required' => 'Email cannot be empty!',
            'password.required' => 'Password cannot be empty!',
            'address.required' => 'Address cannot be empty!',
            'mobile.numeric' => 'Mobile cannot be empty!',
            'gender.required' => 'Gender cannot be empty!',
            'image' => 'File must be: jpeg,png,jpg|max:2048',
        ];
        $cekValidasi = $x->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
            'mobile' => 'numeric',
            'gender' => 'required',
            'file' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ], $messages);

        $file = $x->file('file');
        if (file_exists($file)) {
            $nama_file = time() . "-" . $file->getClientOriginalName();
            $folder = 'file';
            $file->move($folder, $nama_file);
            $path = $folder . "/" . $nama_file;
            //delete
            $data = User::where('id', $id)->first();
            File::delete($data->file);
        } else {
            $path = $x->pathFile;
        }

        User::where("id", "$id")->update([
            'name' => $x->name,
            'email' => $x->email,
            'password' => Hash::make($x->password),
            'address' => $x->address,
            'mobile' => $x->mobile,
            'gender' => $x->gender,
            'file' => $path,
        ], $cekValidasi);
        Alert::success('Berasil Mengubah User');
        return redirect('/dataclient_admin')->with('toast_success', 'Data berhasil di update!');
    }

    //hapus
    public function deletedatauser_client($id)
    {
        try {
            $data = User::where('id', $id)->first();
            File::delete($data->file);
            User::where('id', $id)->delete();
            Alert::success('Berasil Menghapus User');
            return redirect('/dataclient_admin')->with('toast_success', 'Data berhasil di hapus!');
        } catch (\Illuminate\Database\QueryException$e) {
            Alert::warning('Warning Terjadi error');
            return redirect('/dataclient_admin')->with('toast_error', 'Data tidak bisa di hapus!');
        }
    }
}
