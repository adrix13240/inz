<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Samochod extends Model
{
    protected $fillable = [
        'idmarka', 'model', 'idsegment', 'skrzynia', 'kolor', 'tempomat'
    ];

    public function marka()
    {
        return $this->belongsTo('App\Marka', 'idmarka');
    }
    public function segment()
    {
        return $this->belongsTo('App\Segment', 'idsegment');
    }
}
