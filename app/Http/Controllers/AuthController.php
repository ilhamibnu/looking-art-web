<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function postlogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi'

        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/admin/dashboard')->with('login', 'Login berhasil');
        }

        return redirect('/admin/login')->with('error', 'Login gagal, email atau password salah');
    }

    public function updateprofil(Request $request)
    {
        if ($request->password) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users,email,' . Auth::user()->id,
                'password' => 'required',
                'repassword' => 'required|same:password',
            ], [
                'name.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password harus diisi',
                'repassword.required' => 'Password harus diisi',

            ]);
        } else {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . Auth::user()->id,
            ], [
                'name.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi',

            ]);
        }

        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        return redirect('/admin/dashboard')->with('update', 'Profil berhasil diupdate');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login')->with('logout', 'Logout berhasil');
    }
}
