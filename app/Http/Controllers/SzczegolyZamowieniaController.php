<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SzczegolyZamowienia;

class SzczegolyZamowieniaController extends Controller
{
    // Pobranie wszystkich szczegółów zamówienia
    public function index()
    {
        $szczegoly = SzczegolyZamowienia::all();
        return response()->json($szczegoly);
    }

    // Pobranie konkretnego szczegółu zamówienia
    public function show($id)
    {
        $szczegol = SzczegolyZamowienia::findOrFail($id);
        return response()->json($szczegol);
    }

    // Dodanie nowego szczegółu zamówienia
    public function store(Request $request)
    {
        $validated = $request->validate([
            'zamowienie_id' => 'required|exists:zamowienia,id',
            'bilet_id' => 'required|exists:bilety,id',
            'ilosc' => 'required|integer',
            'cena' => 'required|numeric',
        ]);
        $szczegol = SzczegolyZamowienia::create($validated);
        return response()->json($szczegol, 201);
    }

    // Usunięcie szczegółu zamówienia
    public function destroy($id)
    {
        $szczegol = SzczegolyZamowienia::findOrFail($id);
        $szczegol->delete();
        return response()->json(['message' => 'Szczegół zamówienia usunięty']);
    }
}
