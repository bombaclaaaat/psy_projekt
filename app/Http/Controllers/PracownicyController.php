<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pracownik;

class PracownicyController extends Controller
{
    // Pobranie wszystkich pracowników
    public function index()
    {
        $pracownicy = Pracownik::all();
        return response()->json($pracownicy);
    }

    // Pobranie konkretnego pracownika
    public function show($id)
    {
        $pracownik = Pracownik::findOrFail($id);
        return response()->json($pracownik);
    }

    // Dodanie nowego pracownika
    public function store(Request $request)
    {
        $validated = $request->validate([
            'imie' => 'required',
            'nazwisko' => 'required',
            'email' => 'required|email',
            'rola' => 'required|string',
        ]);
        $pracownik = Pracownik::create($validated);
        return response()->json($pracownik, 201);
    }

    // Edycja pracownika
    public function update(Request $request, $id)
    {
        $pracownik = Pracownik::findOrFail($id);
        $pracownik->update($request->all());
        return response()->json($pracownik);
    }

    // Usunięcie pracownika
    public function destroy($id)
    {
        $pracownik = Pracownik::findOrFail($id);
        $pracownik->delete();
        return response()->json(['message' => 'Pracownik usunięty']);
    }
}
