<?php

namespace App\Http\Controllers;

use App\Models\Donatur;
use Illuminate\Http\Request;
use App\Models\User;

class DonaturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donaturs = Donatur::all();
        return view('donatur.home-donatur', compact('donaturs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('donatur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nama_perusahaan' => 'required|string|max:255',
        'siup_foto' => 'required|file|image|max:2048',
        'alamat_perusahaan' => 'required|string|max:255',
        'lokasi_foto' => 'required|file|image|max:2048',
        'deskripsi' => 'required|string',
    ]);

    // Handle file uploads
    $siupFotoPath = $request->file('siup_foto')->store('siup_fotos', 'public');
    $lokasiFotoPath = $request->file('lokasi_foto')->store('lokasi_fotos', 'public');

    // Create Donatur
    $donatur = Donatur::create([
        'user_id' => auth()->id(), // Associate with authenticated user
        'nama_perusahaan' => $request->nama_perusahaan,
        'siup_foto' => $siupFotoPath,
        'alamat_perusahaan' => $request->alamat_perusahaan,
        'lokasi_foto' => $lokasiFotoPath,
        'deskripsi' => $request->deskripsi,
    ]);

    $user = User::find(auth()->id());
    $user->donatur = 1;
    $user->save();
    
    return redirect()->route('donatur.index')->with('success', 'Donatur created successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show(Donatur $donatur)
    {
        return view('donatur.show', compact('donatur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donatur $donatur)
    {
        return view('donatur.edit', compact('donatur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donatur $donatur)
    {
        $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'siup_foto' => 'nullable|string|max:255',
            'alamat_perusahaan' => 'required|string|max:255',
            'lokasi_foto' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $donatur->update($request->all());

        return redirect()->route('donatur.index')->with('success', 'Donatur updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donatur $donatur)
    {
        $donatur->delete();

        return redirect()->route('donatur.index')->with('success', 'Donatur deleted successfully.');
    }
}
