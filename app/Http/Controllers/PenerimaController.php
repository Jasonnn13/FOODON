<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use App\Models\User;
use Illuminate\Http\Request;

class PenerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penerimas = Penerima::all();
        return view('Penerima.home-pengguna', compact('penerimas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penerima.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'username' => 'required|string|max:255',
        'nama_lengkap' => 'required|string|max:255',
        'umur' => 'required|integer|min:1',
        'stkm_foto' => 'required|file|image|max:2048',
        'alamat' => 'required|string|max:255',
        'foto_profil' => 'required|file|image|max:2048',
    ]);

    // Handle file uploads
    $stkmFotoPath = $request->file('stkm_foto')->store('stkm_fotos', 'public');
    $fotoProfilPath = $request->file('foto_profil')->store('foto_profils', 'public');

    // Create Penerima
    $penerima = Penerima::create([
        'user_id' => auth()->id(), // Associate with authenticated user
        'username' => $request->username,
        'nama_lengkap' => $request->nama_lengkap,
        'umur' => $request->umur,
        'stkm_foto' => $stkmFotoPath,
        'alamat' => $request->alamat,
        'foto_profil' => $fotoProfilPath,
    ]);

    // Update 'penerima' column in 'users' table
    $user = User::find(auth()->id());
    $user->penerima = 1;
    $user->save();

    return redirect()->route('penerima.index')->with('success', 'Data Penerima created successfully.');
}

    /**
     * Display the specified resource.
     */
    public function show(Penerima $penerima)
    {
        return view('penerima.show', compact('penerima'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penerima $penerima)
    {
        return view('penerima.edit', compact('penerima'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penerima $penerima)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'nama_lengkap' => 'required|string|max:255',
            'umur' => 'required|integer|min:1',
            'stkm_foto' => 'nullable|file|image|max:2048',
            'alamat' => 'required|string|max:255',
            'foto_profil' => 'nullable|file|image|max:2048',
        ]);

        // Update Penerima
        $data = [
            'username' => $request->username,
            'nama_lengkap' => $request->nama_lengkap,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
        ];

        // Handle file uploads if new files are provided
        if ($request->hasFile('stkm_foto')) {
            $stkmFotoPath = $request->file('stkm_foto')->store('stkm_fotos', 'public');
            $data['stkm_foto'] = $stkmFotoPath;
        }

        if ($request->hasFile('foto_profil')) {
            $fotoProfilPath = $request->file('foto_profil')->store('foto_profils', 'public');
            $data['foto_profil'] = $fotoProfilPath;
        }

        $penerima->update($data);

        return redirect()->route('penerima.index')->with('success', 'Data Penerima updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penerima $penerima)
    {
        $penerima->delete();

        return redirect()->route('penerima.index')->with('success', 'Data Penerima deleted successfully.');
    }
}
