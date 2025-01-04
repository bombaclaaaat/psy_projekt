<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MetodaPlatnosci;

class MetodyPlatnosciController extends Controller
{
    // Pobranie wszystkich metod płatności
    public function index()
    {
        $metody = MetodaPlatnosci::all();
        return response()->json($metody);
    }

    // Pobranie konkretnej metody płatności
    public function show($id)
    {
        $metoda = MetodaPlatnosci::findOrFail($id);
        return response()->json($metoda);
    }

    // Dodanie nowej metody płatności
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nazwa' => 'required|string',
            'opis' => 'nullable|string',
        ]);
        $metoda = MetodaPlatnosci::create($validated);
        return response()->json($metoda, 201);
    }

    // Edycja metody płatności
    public function update(Request $request, $id)
    {
        $metoda = MetodaPlatnosci::findOrFail($id);
        $metoda->update($request->all());
        return response()->json($metoda);
    }

    // Usunięcie metody płatności
    public function destroy($id)
    {
        $metoda = MetodaPlatnosci::findOrFail($id);
        $metoda->delete();
        return response()->json(['message' => 'Metoda płatności usunięta']);
    }
}
