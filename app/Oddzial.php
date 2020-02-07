<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oddzial extends Model
{
    protected $fillable = [
        'miasto', 'ulica', 'telefon', 'email',
    ];
}
