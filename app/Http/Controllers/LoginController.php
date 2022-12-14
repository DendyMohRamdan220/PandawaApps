<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (session('success')) {
                Alert::success(session('success'));
            }

            if (session('error')) {
                Alert::error(session('error'));
            }

            return $next($request);
        });
    }

    //Login
    public function view_login()
    {

        return view('login_register.login');
    }

    public function login(Request $request)
    {

        $cek = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($cek)) {
            $request->session()->regenerate();
            if (Auth()->user()->level == 'Admin') {
                return redirect()->intended('dashboard_admin');
            } elseif (Auth()->user()->level == 'Employee') {
                return redirect()->intended('dashboardv1');
            } elseif (Auth()->user()->level == 'Client') {
                return redirect()->intended('dashboardv2');
            } elseif (Auth()->user()->level == 'Sales') {
                return redirect()->intended('dashboardv3');
            }
        }
        return back()->with('error', 'Sorry! Your email or password is wrong');
    }

    //Register
    public function view_register()
    {
        return view('login_register.register');
    }

    public function register(Request $a)
    {
        $messages = [
            'required' => 'Data harus diisi!',
            'email' => 'Alamat username tidak valid',
            'password' => 'required',
        ];

        $cekvalidasi = $a->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => [
                'required',
                'string',
                'confirmed',
                Password::min(8)->letters()->numbers()->mixedCase(),
            ],
            'level' => 'required',
        ], $messages);

        User::create([
            'name' => $a->name,
            'email' => $a->email,
            'password' => Hash::make($a->password),
            'level' => $a->level,
        ], $cekvalidasi);
        return redirect('login')->with('success', 'Akun berhasil dibuat!');
    }

    //Logout
    public function logout(Request $a)
    {
        Auth::logout();
        $a->session()->invalidate();
        $a->session()->regenerateToken();
        return redirect('login');
    }
}
