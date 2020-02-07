<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubezpieczenie extends Model
{
    protected $fillable = [
        'nazwa', 'cena'
    ];
}
