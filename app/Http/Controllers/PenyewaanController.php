<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyewaan;

class PenyewaanController extends Controller
{
    public function index()
    {
        $penyewaan = Penyewaan::with('user', 'art')->get();
        return view('admin.pages.penyewaan', [
            'penyewaan' => $penyewaan
        ]);
    }

    public function sewastatus(Request $request, $id)
    {
        $status = $request->status;
        $penyewaan = Penyewaan::find($id);
        if ($status == 'Berhasil') {
            $penyewaan->status = $status;
            $penyewaan->keterangan = 'Art berhasil disewa oleh anda';
            $penyewaan->save();
        } else {
            $penyewaan->status = $status;
            $penyewaan->keterangan = 'Art tidak berhasil disewa oleh anda';
            $penyewaan->save();
        }

        return redirect()->back()->with('status', 'Status berhasil diubah');
    }
}
