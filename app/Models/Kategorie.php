<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoria extends Model
{
    use HasFactory;

    // Określenie nazwy tabeli
    protected $table = 'kategorie'; // Nazwa tabeli w bazie danych
    public $timestamps = false; // Jeśli tabela nie ma pól timestamp (created_at, updated_at)

    // Określenie, które kolumny mogą być masowo przypisywane
    protected $fillable = [
        'nazwa',
        'opis',
    ];

    /**
     * Relacja z tabelą 'Pies'
     * Zwraca psy, które należą do tej kategorii.
     */
    public function psy()
    {
        // Relacja "jeden do wielu" z tabelą 'Pies', gdzie 'kategoria_id' to klucz obcy
        return $this->hasMany(Pies::class, 'kategoria_id');
    }
}
