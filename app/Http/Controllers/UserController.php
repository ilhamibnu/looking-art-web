<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::where('role', 'user')->get();
        return view('admin.pages.user', [
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
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

        return redirect('/admin/user')->with('store', 'Data berhasil ditambahkan');
    }

    public function edit(Request $request, $id)
    {
        if ($request->password) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users,email,' . $id,
                'password' => 'required',
                'repassword' => 'required|same:password',
                'no_hp' => 'required',

            ], [
                'name.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password harus diisi',
                'repassword.required' => 'Password harus diisi',
                'no_hp.required' => 'No HP harus diisi',
            ]);
        } else {
            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users,email,' . $id,
                'no_hp' => 'required',

            ], [
                'name.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi',
                'email.unique' => 'Email sudah terdaftar',
                'no_hp.required' => 'No HP harus diisi',

            ]);
        }

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->no_hp = $request->no_hp;
        $user->save();

        return redirect('/admin/user')->with('update', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        // cek penyewaan user
        $penyewaan = Penyewaan::where('id_user', $id)->get();
        if ($penyewaan->count() > 0) {
            // delere penyewaan
            foreach ($penyewaan as $p) {
                $p->delete();
            }
        }

        $user = User::find($id);
        $user->delete();

        return redirect('/admin/user')->with('destroy', 'Data berhasil dihapus');
    }
}
