<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function indexLogin()
    {
        return view('user.auth.login');
    }

    public function indexRegister()
    {
        return view('user.auth.register');
    }

    public function indexProfil()
    {
        return view('user.pages.profil');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi'

        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/')->with('login', 'Login berhasil');
        }

        return redirect('/user/login')->with('error', 'Login gagal, email atau password salah');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'repassword' => 'required|same:password', // tambahkan ini
            'no_hp' => 'required',
        ], [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password harus diisi',
            'repassword.required' => 'Password harus diisi',
            'no_hp.required' => 'No HP harus diisi',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->no_hp = $request->no_hp;
        $user->save();

        return redirect('/user/login')->with('store', 'Data berhasil ditambahkan');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('logout', 'Logout berhasil');
    }

    public function updateProfil(Request $request)
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
        return redirect('/user/profil')->with('updateprofil', 'Profil berhasil diupdate');
    }
}
