<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wystawa;

class WystawyController extends Controller
{
    // Pobranie wszystkich wystaw
    public function index()
    {
        $wystawy = Wystawa::all();
        return response()->json($wystawy);
    }

    // Pobranie konkretnej wystawy
    public function show($id)
    {
        $wystawa = Wystawa::findOrFail($id);
        return response()->json($wystawa);
    }

    // Dodanie nowej wystawy
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nazwa' => 'required',
            'data_rozpoczecia' => 'required|date',
            'data_zakonczenia' => 'required|date',
            'miejsce' => 'required',
        ]);
        $wystawa = Wystawa::create($validated);
        return response()->json($wystawa, 201);
    }

    // Edycja wystawy
    public function update(Request $request, $id)
    {
        $wystawa = Wystawa::findOrFail($id);
        $wystawa->update($request->all());
        return response()->json($wystawa);
    }

    // Usunięcie wystawy
    public function destroy($id)
    {
        $wystawa = Wystawa::findOrFail($id);
        $wystawa->delete();
        return response()->json(['message' => 'Wystawa usunięta']);
    }
}
