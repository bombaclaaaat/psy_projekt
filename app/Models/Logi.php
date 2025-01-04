<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_uzytkownik',
        'akcja',
        'data_akcji',
    ];

    /**
     * Relacja: Log należy do użytkownika.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_uzytkownik');
    }
}
