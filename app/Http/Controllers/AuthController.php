<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Http\Resources\UserResource;

class AuthController extends Controller
{
    /**
     * Rejestracja użytkownika.
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'nazwa_uzytkownika' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'haslo' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'nazwa_uzytkownika' => $validated['nazwa_uzytkownika'],
            'email' => $validated['email'],
            'haslo' => Hash::make($validated['haslo']),
            'rola' => 'klient',  // Możesz dostosować rolę użytkownika, np. 'administrator', 'pracownik'
        ]);

        // Po udanej rejestracji automatycznie zaloguj użytkownika
        $token = $user->createToken('DogShowApp')->plainTextToken;

        return response()->json([
            'user' => new UserResource($user),
            'token' => $token
        ], 201);
    }

    /**
     * Logowanie użytkownika.
     */
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|string|email|max:255',
            'haslo' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $validated['email'], 'haslo' => $validated['haslo']])) {
            $user = Auth::user();
            $token = $user->createToken('DogShowApp')->plainTextToken;

            return response()->json([
                'user' => new UserResource($user),
                'token' => $token
            ]);
        }

        throw ValidationException::withMessages([
            'email' => ['Nieprawidłowe dane logowania.'],
        ]);
    }

    /**
     * Wylogowanie użytkownika.
     */
    public function logout(Request $request)
    {
        Auth::user()->tokens->each(function ($token) {
            $token->delete();
        });

        return response()->json([
            'message' => 'Pomyślnie wylogowano.',
        ]);
    }

    /**
     * Zwraca aktualnie zalogowanego użytkownika.
     */
    public function user(Request $request)
    {
        return response()->json([
            'user' => new UserResource($request->user())
        ]);
    }
}
