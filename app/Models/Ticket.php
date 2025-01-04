<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'klient_id',
        'wystawa_id',
        'rodzaj_biletu',
        'cena',
        'data_zakupu',
    ];

    /**
     * Relacja: Bilet należy do jednego klienta.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'klient_id');
    }

    /**
     * Relacja: Bilet jest powiązany z wystawą.
     */
    public function show()
    {
        return $this->belongsTo(Show::class, 'wystawa_id');
    }
}
