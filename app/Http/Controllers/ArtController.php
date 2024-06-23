<?php

namespace App\Http\Controllers;

use App\Models\Art;
use App\Models\Domisili;
use App\Models\Keahlian;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    public function index()
    {
        $domisili = Domisili::all();
        $keahlian = Keahlian::all();
        $art = Art::with('keahlian', 'domisili')->get();
        return view('admin.pages.art', [
            'art' => $art,
            'domisili' => $domisili,
            'keahlian' => $keahlian
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
            'status' => 'required',
            'id_domisili' => 'required',
            'id_keahlian' => 'required'
        ], [
            'name.required' => 'Nama harus diisi',
            'jenis_kelamin.required' => 'Jenis kelamin harus diisi',
            'tgl_lahir.required' => 'Tanggal lahir harus diisi',
            'alamat.required' => 'Alamat harus diisi',
            'foto.required' => 'Foto harus diisi',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Foto harus berformat jpeg, png, jpg',
            'status.required' => 'Status harus diisi',
            'id_domisili.required' => 'Domisili harus diisi',
            'id_keahlian.required' => 'Keahlian harus diisi'


        ]);

        // upload foto
        $file = $request->file('foto');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'art';
        $file->move($tujuan_upload, $nama_file);


        $art = new Art;
        $art->name = $request->name;
        $art->jenis_kelamin = $request->jenis_kelamin;
        $art->tgl_lahir = $request->tgl_lahir;
        $art->alamat = $request->alamat;
        $art->foto = $nama_file;
        $art->status = $request->status;
        $art->id_domisili = $request->id_domisili;
        $art->id_keahlian = $request->id_keahlian;
        $art->save();

        return redirect('/admin/art')->with('store', 'Data berhasil ditambahkan');
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'status' => 'required',
            'id_domisili' => 'required',
            'id_keahlian' => 'required'
        ], [
            'name.required' => 'Nama harus diisi',
            'jenis_kelamin.required' => 'Jenis kelamin harus diisi',
            'tgl_lahir.required' => 'Tanggal lahir harus diisi',
            'alamat.required' => 'Alamat harus diisi',
            'status.required' => 'Status harus diisi',
            'id_domisili.required' => 'Domisili harus diisi',
            'id_keahlian.required' => 'Keahlian harus diisi'

        ]);

        if ($request->hasFile('foto')) {

            // hapus foto lama
            $art = Art::find($id);
            $foto = $art->foto;
            $path = public_path() . '/art/' . $foto;
            if (file_exists($path))
                unlink($path);

            $file = $request->file('foto');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'art';
            $file->move($tujuan_upload, $nama_file);
        }

        $art = Art::find($id);
        $art->name = $request->name;
        $art->jenis_kelamin = $request->jenis_kelamin;
        $art->tgl_lahir = $request->tgl_lahir;
        $art->alamat = $request->alamat;
        if ($request->hasFile('foto')) {
            $art->foto = $nama_file;
        }
        $art->status = $request->status;
        $art->id_domisili = $request->id_domisili;
        $art->id_keahlian = $request->id_keahlian;
        $art->save();

        return redirect('/admin/art')->with('update', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $art = Art::find($id);
        $foto = $art->foto;
        $path = public_path() . '/art/' . $foto;
        if (file_exists($path))
            unlink($path);

        $art->delete();
        return redirect('/admin/art')->with('destroy', 'Data berhasil dihapus');
    }
}
