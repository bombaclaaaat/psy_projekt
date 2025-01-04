<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zamowienie;

class ZamowieniaController extends Controller
{
    // Pobranie wszystkich zamówień
    public function index()
    {
        $zamowienia = Zamowienie::all();
        return response()->json($zamowienia);
    }

    // Pobranie konkretnego zamówienia
    public function show($id)
    {
        $zamowienie = Zamowienie::findOrFail($id);
        return response()->json($zamowienie);
    }

    // Dodanie nowego zamówienia
    public function store(Request $request)
    {
        $validated = $request->validate([
            'klient_id' => 'required|exists:uzytkownicy,id',
            'cena_calkowita' => 'required|numeric',
            'status' => 'required|string',
            'status_platnosci' => 'required|string',
        ]);
        $zamowienie = Zamowienie::create($validated);
        return response()->json($zamowienie, 201);
    }

    // Edycja zamówienia
    public function update(Request $request, $id)
    {
        $zamowienie = Zamowienie::findOrFail($id);
        $zamowienie->update($request->all());
        return response()->json($zamowienie);
    }

    // Usunięcie zamówienia
    public function destroy($id)
    {
        $zamowienie = Zamowienie::findOrFail($id);
        $zamowienie->delete();
        return response()->json(['message' => 'Zamówienie usunięte']);
    }
}
