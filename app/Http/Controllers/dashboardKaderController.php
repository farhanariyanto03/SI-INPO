<?php

namespace App\Http\Controllers;

use App\Models\Data_lansia;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

class dashboardKaderController extends Controller
{
    public function index()
    {
        $jumlahLansia = Data_lansia::all()->count();
        $jumlahPeriksa = Pemeriksaan::all()->count();
        return view('kader.dashboard.index', [
            'jumlahLansia' => $jumlahLansia,
            'jumlahPeriksa' => $jumlahPeriksa,
        ]);
    }
}
