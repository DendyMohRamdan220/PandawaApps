<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function formlogin()
    {
        return view('login_register.login');
    }

    //Proses login
    public function login(Request $a)
    {
        //Validasi
        $messages = [
            'email.required' => 'Email tidak boleh kosong!',
            'password.required' => 'Password tidak boleh kosong!',
        ];
        $cekValidasi = $a->validate([
            //'email' => 'required|email:dns|unique:users',
            'email' => 'required',
            'password' => 'required|max:50',
        ], $messages);

        if (Auth::attempt($cekValidasi)) {
            $a->session()->regenerate();
            return redirect('viewuser')->with('toast_success', 'Selamat Datang!');
        }
        Alert::toast('Maaf Password atau email anda salah');
        return back()->with('toast_error', 'Anda tidak bisa login!');
        /*
    if (Auth::attempt($cek)) {
    $a->session()->regenerate();
    return redirect()->intended('/surat');
    }*/
    }

    //logout
    public function logout(Request $a)
    {
        Auth::logout();
        $a->session()->invalidate();
        $a->session()->regenerateToken();
        return redirect('formlogin');
    }
}
