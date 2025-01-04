<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ocena;

class OcenyController extends Controller
{
    // Pobranie wszystkich ocen
    public function index()
    {
        $oceny = Ocena::all();
        return response()->json($oceny);
    }

    // Pobranie konkretnej oceny
    public function show($id)
    {
        $ocena = Ocena::findOrFail($id);
        return response()->json($ocena);
    }

    // Dodanie nowej oceny
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_zgloszenie' => 'required|exists:zgloszenia,id',
            'ocena' => 'required|integer|min:1|max:10',
            'komentarz' => 'nullable|string',
        ]);
        $ocena = Ocena::create($validated);
        return response()->json($ocena, 201);
    }

    // Edycja oceny
    public function update(Request $request, $id)
    {
        $ocena = Ocena::findOrFail($id);
        $ocena->update($request->all());
        return response()->json($ocena);
    }

    // Usunięcie oceny
    public function destroy($id)
    {
        $ocena = Ocena::findOrFail($id);
        $ocena->delete();
        return response()->json(['message' => 'Ocena usunięta']);
    }
}
