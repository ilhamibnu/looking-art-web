<?php

namespace App\Http\Controllers;

use App\Models\Keahlian;
use Illuminate\Http\Request;

class KeahlianController extends Controller
{
    public function index()
    {
        $keahlian = Keahlian::all();
        return view('admin.pages.keahlian', [
            'keahlian' => $keahlian

        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ], [
            'name.required' => 'Nama keahlian harus diisi'
        ]);

        Keahlian::create([
            'name' => $request->name
        ]);

        return redirect('/admin/keahlian')->with('store', 'Data berhasil ditambahkan');
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ], [
            'name.required' => 'Nama keahlian harus diisi'
        ]);

        Keahlian::where('id', $id)->update([
            'name' => $request->name
        ]);

        return redirect('/admin/keahlian')->with('update', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        Keahlian::destroy($id);
        return redirect('/admin/keahlian')->with('destroy', 'Data berhasil dihapus');
    }
}
