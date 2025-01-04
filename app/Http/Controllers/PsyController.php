<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pies;

class PsyController extends Controller
{
    // Pobranie wszystkich psów
    public function index()
    {
        $psy = Pies::all();
        return response()->json($psy);
    }

    // Pobranie konkretnego psa
    public function show($id)
    {
        $pies = Pies::findOrFail($id);
        return response()->json($pies);
    }

    // Dodanie nowego psa
    public function store(Request $request)
    {
        $validated = $request->validate([
            'imie' => 'required',
            'rasa' => 'required',
            'wiek' => 'required|integer',
            'kolor' => 'required',
            'plec' => 'required',
            'właściciel_id' => 'required|exists:uzytkownicy,id',
        ]);
        $pies = Pies::create($validated);
        return response()->json($pies, 201);
    }

    // Edycja psa
    public function update(Request $request, $id)
    {
        $pies = Pies::findOrFail($id);
        $pies->update($request->all());
        return response()->json($pies);
    }

    // Usunięcie psa
    public function destroy($id)
    {
        $pies = Pies::findOrFail($id);
        $pies->delete();
        return response()->json(['message' => 'Pies usunięty']);
    }
}
