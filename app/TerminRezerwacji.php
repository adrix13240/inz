<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TerminRezerwacji extends Model
{
    protected $fillable = [
        'idsamochod', 'idklient', 'od', 'do'
    ];
}
