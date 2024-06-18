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
        $Art = $penyewaan->art;
        if ($status == 'Berhasil') {
            $penyewaan->status = $status;
            $penyewaan->keterangan = 'Art berhasil disewa oleh anda';
            $penyewaan->save();

            $Art->status = 'Tidak Tersedia';

            // user lain yang menyewa art yang sama akan diubah statusnya menjadi Gagal
            $penyewaan_lain = Penyewaan::where('id_art', $Art->id)->where('id', '!=', $penyewaan->id)->get();
            foreach ($penyewaan_lain as $penyewaan) {
                $penyewaan->status = 'Gagal';
                $penyewaan->keterangan = 'Art tidak berhasil disewa oleh anda';
                $penyewaan->save();
            }
        } elseif ($status == 'Tidak Jadi') {
            $penyewaan->status = $status;
            $penyewaan->keterangan = 'Penyewaan dibatalkan';
            $penyewaan->save();

            $Art->status = 'Tersedia';
        } elseif ($status == 'Proses') {
            $penyewaan->status = $status;
            $penyewaan->keterangan = 'Menunggu konfirmasi dari admin';
            $penyewaan->save();

            $Art->status = 'Tersedia';
        } else {
            $penyewaan->status = $status;
            $penyewaan->keterangan = 'Art tidak berhasil disewa oleh anda';
            $penyewaan->save();

            $Art->status = 'Tersedia';
        }

        return redirect()->back()->with('status', 'Status berhasil diubah');
    }

    public function destroy($id)
    {
        $penyewaan = Penyewaan::find($id);
        $penyewaan->delete();
        return redirect()->back()->with('delete', 'Data berhasil dihapus');
    }
}
