<?php

namespace App\Http\Controllers;

use App\Rezerwacja;
use App\Samochod;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    public function index()
    {
        $samochods = Samochod::latest()->get();

        return view('oferta.index', ['samochods' => $samochods]);
    }
}
