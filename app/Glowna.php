<?php

namespace App;

use App\OddzialFirmy;
use Illuminate\Database\Eloquent\Model;

class Glowna extends Model
{
    protected $fillable = [
        'termin', 'idOddzial'
    ];

    public function oddzial()
    {
        return $this->belongsTo('App\OddzialFirmy', 'id');
    }
}
