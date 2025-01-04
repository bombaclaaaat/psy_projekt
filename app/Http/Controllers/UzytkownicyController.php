<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UzytkownicyController extends Controller
{
    // Pobranie wszystkich użytkowników
    public function index()
    {
        $uzytkownicy = User::all();
        return response()->json($uzytkownicy);
    }

    // Pobranie konkretnego użytkownika
    public function show($id)
    {
        $uzytkownik = User::findOrFail($id);
        return response()->json($uzytkownik);
    }

    // Utworzenie nowego użytkownika
    public function store(Request $request)
    {
        $validated = $request->validate([
            'imie' => 'required',
            'nazwisko' => 'required',
            'email' => 'required|email|unique:uzytkownicy,email',
            'haslo' => 'required|min:6',
        ]);
        $uzytkownik = User::create($validated);
        return response()->json($uzytkownik, 201);
    }

    // Edycja istniejącego użytkownika
    public function update(Request $request, $id)
    {
        $uzytkownik = User::findOrFail($id);
        $uzytkownik->update($request->all());
        return response()->json($uzytkownik);
    }

    // Usunięcie użytkownika
    public function destroy($id)
    {
        $uzytkownik = User::findOrFail($id);
        $uzytkownik->delete();
        return response()->json(['message' => 'Użytkownik usunięty']);
    }
}
