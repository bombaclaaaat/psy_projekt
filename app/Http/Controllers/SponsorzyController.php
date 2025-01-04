<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsor;

class SponsorzyController extends Controller
{
    // Pobranie wszystkich sponsorów
    public function index()
    {
        $sponsorzy = Sponsor::all();
        return response()->json($sponsorzy);
    }

    // Pobranie konkretnego sponsora
    public function show($id)
    {
        $sponsor = Sponsor::findOrFail($id);
        return response()->json($sponsor);
    }

    // Dodanie nowego sponsora
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nazwa' => 'required|string',
            'kwota' => 'required|numeric',
            'opis' => 'nullable|string',
        ]);
        $sponsor = Sponsor::create($validated);
        return response()->json($sponsor, 201);
    }

    // Edycja sponsora
    public function update(Request $request, $id)
    {
        $sponsor = Sponsor::findOrFail($id);
        $sponsor->update($request->all());
        return response()->json($sponsor);
    }

    // Usunięcie sponsora
    public function destroy($id)
    {
        $sponsor = Sponsor::findOrFail($id);
        $sponsor->delete();
        return response()->json(['message' => 'Sponsor usunięty']);
    }
}
