<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezerwacja extends Model
{
    protected $fillable = [
        'iduser', 'idrezerwacjastatus', 'od', 'do', 'idsamochod', 'idubezpieczenie', 'fotelik', 'nawigacja',
    ];
}
