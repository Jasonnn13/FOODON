<?php

namespace App\Http\Controllers;

use App\Models\DonationItem;
use Illuminate\Http\Request;

class DonationItemController extends Controller
{
    /**
     * Display a listing of the donation items.
     */
    public function index()
    {
        $donationItems = DonationItem::all();
        return response()->json($donationItems);
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
            $fileName = time() . '_' . $request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('images', $fileName, 'public');
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
        $validatedData = $request->validate([
            'nama' => 'sometimes|required|string|max:255',
            'lokasi_pengambilan' => 'sometimes|required|string',
            'tanggal_kadaluwarsa' => 'sometimes|required|date',
            'jumlah' => 'sometimes|required|integer',
            'foto' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'sometimes|required|integer',
        ]);

        if ($request->hasFile('foto')) {
            $fileName = time() . '_' . $request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('images', $fileName, 'public');
            $validatedData['foto'] = '/storage/' . $path;
        }

        $donationItem = DonationItem::findOrFail($id);
        $donationItem->update($validatedData);

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
