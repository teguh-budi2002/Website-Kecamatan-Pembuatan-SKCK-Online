<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('Auth.login');
    }

    public function login(Request $request) {
        $validation = $request->validate([
            'nik'       => 'required|min:16|numeric',
            'password'  => 'required'
        ], [
            'nik.required' => 'NIK Tidak Boleh Kosong.',
            'nik.min'      => 'Format NIK Tidak Valid.',
            'nik.numeric'  => 'Format NIK Tidak Valid.',
            'password.required' => 'Password Tidak Boleh Kosong'
        ]);
        
        $remember_me = $request->remember_me ? true : false;

        if (Auth::attempt(['nik' => $request->nik, 'password' => $request->password], $remember_me)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        } else {
            Alert::error('USER TIDAK DITEMUKAN', 'NIK atau Password Salah');
            return back()->withInput();
        }
    }

    public function logout(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}
