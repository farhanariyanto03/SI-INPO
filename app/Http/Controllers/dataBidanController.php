<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class dataBidanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("kader.data_bidan.index", [
            "dataBidan"=> User::where("role", "bidan")->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("kader.data_bidan.tambah");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            "nama" => "required|max:30",
            "email" => "required|max:30",
            "password" => "required|max:8",
            "jenis_kelamin" => "required|max:20",
            "no_hp" => "required|max:13",
            "role" => "required|max:5",
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);

        return redirect()->route("data_bidan.index");
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
        $data=User::where('id',$id)->first();
        return view('kader.data_bidan.edit',[
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            "nama" => "required|max:30",
            "email" => "required|max:30",
            // "password" => "required|max:8",
            "jenis_kelamin" => "required|max:20",
            "no_hp" => "required|max:13",
            "role" => "required|max:5",
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        User::findOrFail($id)->update($validatedData);
        return redirect()->route('data_bidan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('data_bidan.index');
    }
}
