<?php

namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

class laporanPemeriksaanController extends Controller
{
    public function index(Request $request)
    {
        $tgl_awal = $request->input('tgl_awal');
        $tgl_akhir = $request->input('tgl_akhir');

        $data_lansia = Pemeriksaan::select('pemeriksaans.*', 'data_lansias.nik', 'data_lansias.nama')
            ->join('data_lansias', 'pemeriksaans.NIK', '=', 'data_lansias.NIK')
            ->when($tgl_awal && $tgl_akhir, function ($query) use ($tgl_awal, $tgl_akhir) {
                $query->whereBetween('pemeriksaans.tggl_pemeriksaan', [$tgl_awal, $tgl_akhir]);
            })->get();

        $totalHipertensi = Pemeriksaan::where('hasil_pemeriksaan', 'Hipertensi')
            ->when($tgl_awal && $tgl_akhir, function ($query) use ($tgl_awal, $tgl_akhir) {
                $query->whereBetween('tggl_pemeriksaan', [$tgl_awal, $tgl_akhir]);
            })->count();

        $totalKolestrolBahaya = Pemeriksaan::where('hasil_pemeriksaan1', 'Bahaya')
            ->when($tgl_awal && $tgl_akhir, function ($query) use ($tgl_awal, $tgl_akhir) {
                $query->whereBetween('tggl_pemeriksaan', [$tgl_awal, $tgl_akhir]);
            })->count();

        $totalDiabetes = Pemeriksaan::where('hasil_pemeriksaan2', 'Diabetes')
            ->when($tgl_awal && $tgl_akhir, function ($query) use ($tgl_awal, $tgl_akhir) {
                $query->whereBetween('tggl_pemeriksaan', [$tgl_awal, $tgl_akhir]);
            })->count();

        return view('kader.pemeriksaan.index', [
            'data_lansia' => $data_lansia,
            'totalHipertensi' => $totalHipertensi,
            'totalKolestrolBahaya' => $totalKolestrolBahaya,
            'totalDiabetes' => $totalDiabetes
        ]);
    }

    public function cetakLaporan(Request $request)
    {
        $tgl_awal = $request->input('tgl_awal');
        $tgl_akhir = $request->input('tgl_akhir');

        $data_lansia = Pemeriksaan::select('pemeriksaans.*', 'data_lansias.nik', 'data_lansias.nama')
            ->join('data_lansias', 'pemeriksaans.NIK', '=', 'data_lansias.NIK')
            ->when($tgl_awal && $tgl_akhir, function ($query) use ($tgl_awal, $tgl_akhir) {
                $query->whereBetween('pemeriksaans.tggl_pemeriksaan', [$tgl_awal, $tgl_akhir]);
            })->get();

        $totalHipertensi = Pemeriksaan::where('hasil_pemeriksaan', 'Hipertensi')->count();

        $totalKolestrolBahaya = Pemeriksaan::where('hasil_pemeriksaan1', 'Bahaya')->count();

        $totalDiabetes = Pemeriksaan::where('hasil_pemeriksaan2', 'Diabetes')->count();

        return view('kader.pemeriksaan.cetakLaporan', [
            'cetakLaporan' => $data_lansia,
            'totalHipertensi' => $totalHipertensi,
            'totalKolestrolBahaya' => $totalKolestrolBahaya,
            'totalDiabetes' => $totalDiabetes
        ]);
    }

}
