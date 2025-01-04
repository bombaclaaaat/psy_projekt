<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;

    protected $fillable = [
        'imie',
        'rasa',
        'wiek',
        'kolor',
        'plec',
        'opis',
        'właściciel_id',
    ];

    /**
     * Relacja: Pies należy do jednego użytkownika.
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'właściciel_id');
    }

    /**
     * Relacja: Pies może mieć wiele zgłoszeń.
     */
    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    /**
     * Relacja: Pies może otrzymać wiele ocen.
     */
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
