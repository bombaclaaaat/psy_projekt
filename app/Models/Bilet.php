<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilet extends Model
{
    use HasFactory;

    protected $table = 'bilety';

    protected $fillable = [
        'klient_id',
        'wystawa_id',
        'rodzaj_biletu',
        'cena',
        'data_zakupu',
    ];

    // Relacja: Bilet należy do użytkownika (klienta)
    public function klient()
    {
        return $this->belongsTo(Uzytkownik::class, 'klient_id');
    }

    // Relacja: Bilet dotyczy wystawy
    public function wystawa()
    {
        return $this->belongsTo(Wystawa::class, 'wystawa_id');
    }
}