<?php

namespace App\Http\Controllers;

use App\Models\DonationItem;
use Illuminate\Http\Request;

class DonationItemController extends Controller
{
    /**
     * Display a listing of the donation items.
     */
    public function indexPenerima()
    {
        // Retrieve all donation items
        $posts = DonationItem::all();

        // Pass donation items to the view for penerima
        return view('Penerima.home-pengguna', compact('posts'));
    }

    /**
     * Display a listing of the donation items for donatur.
     */
    public function indexDonatur()
    {
        // Retrieve all donation items
        $posts = DonationItem::all();

        // Pass donation items to the view for donatur
        return view('Donatur.home-Donatur', compact('posts'));
    }
    /**
     * Store a newly created donation item in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi_pengambilan' => 'required|string',
            'tanggal_kadaluwarsa' => 'required|date',
            'jumlah' => 'required|integer',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|integer',
        ]);

        // Handle the file upload for the 'foto' field
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('images', 'public');
            $validatedData['foto'] = '/storage/' . $path;
        }

        // Create the donation item
        DonationItem::create($validatedData);

        // Redirect or return response
        return redirect()->route('donation-items.index')->with('flash_message', 'Donation Item Added!');
    }

    /**
     * Display the specified donation item.
     */
    public function show($id)
    {
        $donationItem = DonationItem::findOrFail($id);
        return response()->json($donationItem);
    }

    /**
     * Update the specified donation item in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'nama' => 'sometimes|required|string|max:255',
            'lokasi_pengambilan' => 'sometimes|required|string',
            'tanggal_kadaluwarsa' => 'sometimes|required|date',
            'jumlah' => 'sometimes|required|integer',
            'foto' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'sometimes|required|integer',
        ]);

        // Find the donation item
        $donationItem = DonationItem::findOrFail($id);

        // Update the donation item with validated data
        $donationItem->fill($validatedData);

        // Handle the file upload for the 'foto' field if provided
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('images', 'public');
            $donationItem->foto = '/storage/' . $path;
        }

        // Save the updated donation item
        $donationItem->save();

        // Return JSON response
        return response()->json($donationItem);
    }

    /**
     * Remove the specified donation item from storage.
     */
    public function destroy($id)
    {
        $donationItem = DonationItem::findOrFail($id);
        $donationItem->delete();

        return response()->json(null, 204);
    }
}
