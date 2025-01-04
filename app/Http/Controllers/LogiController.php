<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class LogiController extends Controller
{
    // Pobranie wszystkich logów
    public function index()
    {
        $logi = Log::all();
        return response()->json($logi);
    }

    // Pobranie konkretnego logu
    public function show($id)
    {
        $log = Log::findOrFail($id);
        return response()->json($log);
    }

    // Dodanie nowego logu
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_uzytkownik' => 'required|exists:uzytkownicy,id',
            'akcja' => 'required|string',
            'data_akcji' => 'required|date',
        ]);
        $log = Log::create($validated);
        return response()->json($log, 201);
    }

    // Usunięcie logu
    public function destroy($id)
    {
        $log = Log::findOrFail($id);
        $log->delete();
        return response()->json(['message' => 'Log usunięty']);
    }
}
