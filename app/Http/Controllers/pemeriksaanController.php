<?php

namespace App\Http\Controllers;

use App\Models\Data_lansia;
use App\Models\Pemeriksaan;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Symfony\Component\Mime\Part\DataPart;

class pemeriksaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_lansia = Pemeriksaan::select('pemeriksaans.*', 'data_lansias.nik', 'data_lansias.nama')
        ->join('data_lansias', 'pemeriksaans.NIK', '=', 'data_lansias.NIK')->get();
        return view('bidan.pemeriksaan.index', [
            'data_lansia' => $data_lansia
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bidan.pemeriksaan.tambah', [
            'data_lansia' => Data_lansia::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'NIK' => 'required|max:16',
            'bb' => 'required|max:3',
            'tb' => 'required|max:3',
            'tekanan_darah' => 'required|max:3',
            'hasil_pemeriksaan' => 'required|max:10',
            'kolestrol' => 'required|max:3',
            'hasil_pemeriksaan1' => 'required|max:10',
            'gula_darah' => 'required|max:3',
            'hasil_pemeriksaan2' => 'required|max:15',
            'tggl_pemeriksaan' => 'date',
        ]);

        $validatedData['tggl_pemeriksaan'] = date('Y-m-d H:i:s');
        Pemeriksaan::create($validatedData);
        return redirect()->route('pemeriksaan.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getNameLansia(Request $request)
    {
        $NIK = $request->NIK;
        $data_lansia = Data_lansia::where('NIK', $NIK)->first();

        return response()->json([
            'nama' => $data_lansia->nama,
            'jenis_kelamin' => $data_lansia->jenis_kelamin,
            'alamat' => $data_lansia->alamat,
            'no_hp' => $data_lansia->no_hp
        ]);
    }
}
