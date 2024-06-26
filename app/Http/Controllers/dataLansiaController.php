<?php

namespace App\Http\Controllers;

use App\Models\Data_lansia;
use Illuminate\Http\Request;

class dataLansiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kader.data_lansia.index', [
            'dataLansia' => Data_lansia::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kader.data_lansia.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'NIK' => 'required|max:16',
            'nama' => 'required|max:30',
            'jenis_kelamin' => 'required|max:20',
            'alamat' => 'required|max:255',
            'no_hp' => 'required',
        ]);

        Data_lansia::create($validatedData);

        return redirect()->route('data_lansia.index');
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
        $data = Data_lansia::where('NIK', $id)->first();
        return view('kader.data_lansia.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'NIK' => 'required|max:16',
            'nama' => 'required|max:30',
            'jenis_kelamin' => 'required|max:20',
            'alamat' => 'required|max:255',
            'no_hp' => 'required',
        ]);

        Data_lansia::where('NIK', $id)->update($validatedData);
        return redirect()->route('data_lansia.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Data_lansia::where('NIK', $id)->delete();
        return redirect()->route('data_lansia.index');
    }
}
