<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = [
        'nazwa_uzytkownika',
        'email',
        'haslo',
        'rola',
    ];

    protected $hidden = [
        'haslo',  // Hasło powinno być ukryte w odpowiedzi
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relacja: Użytkownik może mieć wiele psów.
     */
    public function dogs()
    {
        return $this->hasMany(Dog::class, 'właściciel_id');
    }

    /**
     * Relacja: Użytkownik może uczestniczyć w wielu zgłoszeniach.
     */
    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    /**
     * Relacja: Użytkownik może oceniać wystawy.
     */
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
