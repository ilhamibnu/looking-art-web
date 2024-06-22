<?php

namespace App\Http\Controllers;

use App\Models\Domisili;
use Illuminate\Http\Request;

class DomisiliController extends Controller
{
    public function index()
    {
        $domisili = Domisili::all();
        return view('admin.pages.domisili', [
            'domisili' => $domisili
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ], [
            'name.required' => 'Nama domisili harus diisi'
        ]);

        Domisili::create([
            'name' => $request->name
        ]);

        return redirect('/admin/domisili')->with('store', 'Data berhasil ditambahkan');
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ], [
            'name.required' => 'Nama domisili harus diisi'
        ]);

        Domisili::where('id', $id)->update([
            'name' => $request->name
        ]);

        return redirect('/admin/domisili')->with('update', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        Domisili::destroy($id);
        return redirect('/admin/domisili')->with('destroy', 'Data berhasil dihapus');
    }
}
