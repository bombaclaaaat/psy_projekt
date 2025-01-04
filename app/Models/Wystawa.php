<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wystawa extends Model
{
    use HasFactory;

    protected $table = 'wystawy';

    protected $fillable = [
        'nazwa',
        'data_rozpoczecia',
        'data_zakonczenia',
        'miejsce',
        'opis',
    ];

    // Relacja: Wystawa może mieć wiele ocen
    public function oceny()
    {
        return $this->hasMany(Ocena::class, 'wystawa_id');
    }

    // Relacja: Wystawa może mieć wiele biletów
    public function bilety()
    {
        return $this->hasMany(Bilet::class, 'wystawa_id');
    }
}