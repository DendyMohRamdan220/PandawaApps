<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeeController extends Controller
{
    public function datauser_employee(Request $request)
    {
        $keyword = $request->keyword;
        $data = User::where('name', 'LIKE', '%' . $keyword . '%')
            ->orWhere('email', 'LIKE', '%' . $keyword . '%')
            ->orWhere('mobile', 'LIKE', '%' . $keyword . '%')
            ->orWhere('created_at', 'LIKE', '%' . $keyword . '%')
            ->paginate();
        return view('Employees.dataemployee', compact('data'));
    }

    public function tambahdatauser_employee()
    {
        return view('Employees.tambahdataemployee');
    }

    public function insertdatauser_employee(Request $x)
    {
        //Validasi
        $messages = [
            'name.required' => 'Nama tidak boleh kosong!',
            'email.required' => 'Email tidak boleh kosong!',
            'level.required' => 'level user tidak boleh kosong!',
            'password.required' => 'Password tidak boleh kosong!',
            'address.required' => 'Alamat tidak boleh kosong!',
            'mobile.numeric' => 'Nomor Hp tidak boleh kosong!',
            'gender.required' => 'Jenis Kelamin tidak boleh kosong!',
            'image' => 'File harus berupa tipe: jpeg,png,jpg|max:5000',
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
        return redirect('/dataemployee_admin')->with('toast_success', 'Data berhasil tambah!');
    }

    //edit data user
    public function editdatauser_employee($idUser)
    {
        $dataUser = User::find($idUser);
        return view("Employees.editdataemployee", ['data' => $dataUser]);
    }

    //Update data user
    public function updatedatauser_employee($idUser, Request $x)
    {
        //Validasi
        $messages = [
            'name.required' => 'Nama tidak boleh kosong!',
            'email.required' => 'Email tidak boleh kosong!',
            'password.required' => 'Password tidak boleh kosong!',
            'level.required' => 'level user tidak boleh kosong!',
            'address.required' => 'Alamat tidak boleh kosong!',
            'mobile.numeric' => 'Nomor Hp tidak boleh kosong!',
            'gender.required' => 'Jenis Kelamin tidak boleh kosong!',
            'image' => 'File harus berupa tipe: jpeg,png,jpg|max:2048',
        ];
        $cekValidasi = $x->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'level' => 'required',
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
            $data = User::where('id', $idUser)->first();
            File::delete($data->file);
        } else {
            $path = $x->pathFile;
        }

        User::where("id", "$idUser")->update([
            'name' => $x->name,
            'email' => $x->email,
            'password' => Hash::make($x->password),
            'level' => $x->level,
            'address' => $x->address,
            'mobile' => $x->mobile,
            'gender' => $x->gender,
            'file' => $path,
        ], $cekValidasi);
        Alert::success('Berasil Mengubah User');
        return redirect('/dataemployee_admin')->with('toast_success', 'Data berhasil di update!');
    }

    //hapus
    public function deletedatauser_employee($id)
    {
        try {
            $data = User::where('id', $id)->first();
            File::delete($data->file);
            User::where('id', $id)->delete();
            Alert::success('Berasil Menghapus User');
            return redirect('/dataemployee_admin')->with('toast_success', 'Data berhasil di hapus!');
        } catch (\Illuminate\Database\QueryException$e) {
            Alert::warning('Warning Terjadi error');
            return redirect('/dataemployee_admin')->with('toast_error', 'Data tidak bisa di hapus!');
        }
    }
}
