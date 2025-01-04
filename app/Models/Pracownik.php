<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'uzytkownik_id',
        'rola',
        'data_zatrudnienia',
    ];

    /**
     * Relacja: Pracownik należy do użytkownika.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'uzytkownik_id');
    }
}
