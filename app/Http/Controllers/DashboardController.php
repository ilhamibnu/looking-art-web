<?php

namespace App\Http\Controllers;

use App\Models\Domisili;
use App\Models\Keahlian;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $domisili = Domisili::all();
        $keahlian = Keahlian::all();
        return view('admin.pages.dashboard',[
            'domisili' => $domisili,
            'keahlian' => $keahlian
        ]);
    }
}
