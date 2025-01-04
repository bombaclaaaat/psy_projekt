<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zamowienie extends Model
{
    use HasFactory;

    protected $table = 'zamowienia';

    protected $fillable = [
        'klient_id',
        'data_zamowienia',
        'cena_calkowita',
        'status',
        'status_platnosci',
    ];

    // Relacja: Zamówienie należy do użytkownika (klienta)
    public function klient()
    {
        return $this->belongsTo(Uzytkownik::class, 'klient_id');
    }

    // Relacja: Zamówienie ma wiele szczegółów
    public function szczegoly()
    {
        return $this->hasMany(SzczegolyZamowienia::class, 'zamowienie_id');
    }
}