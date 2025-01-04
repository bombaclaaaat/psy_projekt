<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodyPlatnosci extends Model
{
    use HasFactory;
    protected $table = 'metody_platnosci';

    // Określenie, które pola są "masowo przypisywalne" (fillable)
    protected $fillable = ['nazwa', 'opis'];
}