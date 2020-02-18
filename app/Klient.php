<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klient extends Model
{
    protected $fillable = [
        'imie', 'nazwisko','pesel', 'ulica', 'numerDomu', 'miejscowosc', 'kodPocztowy', 'poczta'
    ];
}
