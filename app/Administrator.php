<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $fillable = [
        'email', 'password', 'imie', 'nazwisko', 'pesel', 'adres',
    ];
}
