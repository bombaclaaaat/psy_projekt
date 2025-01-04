<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocena extends Model
{
    use HasFactory;

    // Nazwa tabeli, której używamy w bazie danych
    protected $table = 'oceny';

    // Określenie, które kolumny mogą być masowo przypisywane
    protected $fillable = [
        'pies_id',        // Id psa, który otrzymuje ocenę
        'wystawa_id',     // Id wystawy, której ocena dotyczy
        'sedzia_id',      // Id sędziego, który przyznał ocenę
        'ocena',          // Wartość oceny
        'komentarze',     // Komentarze sędziego
        'data_oceny',     // Data przyznania oceny
    ];

    /**
     * Relacja: Ocena dotyczy psa.
     * Pies ma wiele ocen.
     */
    public function pies()
    {
        return $this->belongsTo(Pies::class, 'pies_id'); // Klucz obcy wskazujący na psa
    }

    /**
     * Relacja: Ocena dotyczy wystawy.
     * Wystawa ma wiele ocen.
     */
    public function wystawa()
    {
        return $this->belongsTo(Wystawa::class, 'wystawa_id'); // Klucz obcy wskazujący na wystawę
    }

    /**
     * Relacja: Ocena jest przyznana przez sędziego.
     * Sędzia może przyznać wiele ocen.
     */
    public function sedzia()
    {
        return $this->belongsTo(Sedzia::class, 'sedzia_id'); // Klucz obcy wskazujący na sędziego
    }

    // Automatycznie konwertuj datę oceny na obiekt Carbon
    protected $dates = [
        'data_oceny',
    ];
}
