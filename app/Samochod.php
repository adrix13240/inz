<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Samochod extends Model
{
    protected $fillable = [
        'idmarka', 'model', 'idsegment', 'idoddzial', 'skrzynia', 'kolor', 'paliwo', 'miejsca', 'zamek', 'klimatyzacja', 'tempomat'
    ];

    public function marka(){
        return $this->belongsTo('App\Marka', 'idmarka');
    }

    public function segment(){
        return $this->belongsTo('App\Segment', 'idsegment');
    }

    public function oddzial(){
        return $this->belongsTo('App\Oddzial', 'idoddzial');
    }
}
