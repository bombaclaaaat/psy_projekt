<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bilet;

class BiletyController extends Controller
{
    // Pobranie wszystkich biletów
    public function index()
    {
        $bilety = Bilet::all();
        return response()->json($bilety);
    }

    // Pobranie konkretnego biletu
    public function show($id)
    {
        $bilet = Bilet::findOrFail($id);
        return response()->json($bilet);
    }

    // Dodanie nowego biletu
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nazwa' => 'required|string|max:255',
            'cena' => 'required|numeric',
            'dostepnosc' => 'required|integer',
            'id_wystawa' => 'required|exists:wystawy,id', // Bilet jest przypisany do wystawy
        ]);

        $bilet = Bilet::create($validated);
        return response()->json($bilet, 201);
    }

    // Edycja istniejącego biletu
    public function update(Request $request, $id)
    {
        $bilet = Bilet::findOrFail($id);
        $bilet->update($request->all());
        return response()->json($bilet);
    }

    // Usunięcie biletu
    public function destroy($id)
    {
        $bilet = Bilet::findOrFail($id);
        $bilet->delete();
        return response()->json(['message' => 'Bilet usunięty']);
    }
}
