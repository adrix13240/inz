<?php

namespace App\Http\Controllers;
use App\Rezerwacja;
use App\User;
use App\StatusRezerwacji;
use App\Samochod;
use App\Ubezpieczenie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RezerwacjaController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $rezerwacjas = Rezerwacja::latest()->get();
        return view('rezerwacja.index', ['rezerwacjas' => $rezerwacjas]);
    }

    public function show(Rezerwacja $rezerwacja)
    {
        return view('rezerwacja.show', ['rezerwacja' => $rezerwacja]);
    }

    public function create()
    {
            $ubezpieczenia = Ubezpieczenie::get();
            $ubezpieczeniearray = array();
            foreach ($ubezpieczenia as $ubezpieczenie) {
                $ubezpieczeniearray[$ubezpieczenie->id] = $ubezpieczenie->nazwa;
            }
            return view('rezerwacja.create')->with('ubezpieczenia', $ubezpieczeniearray);
        }

    public function store(Request $request)
    {
        $ubezpieczenia = Ubezpieczenie::get();
        $ubezpieczeniearray = array();
        foreach($ubezpieczenia as $ubezpieczenie){
            $ubezpieczeniearray[$ubezpieczenie->id] = $ubezpieczenie->nazwa;
        }
        Rezerwacja::create($request->all());
        return redirect()->route('rezerwacja.index')->with('ubezpieczenia', $ubezpieczeniearray);
    }

    public function edit(Rezerwacja $rezerwacja)
    {
        return view('rezerwacja.edit', compact('rezerwacja'));
    }

    public function update(Request $request, Rezerwacja $rezerwacja)
    {
        $rezerwacja->update($request->all());
        return redirect()->route('rezerwacja.index');
    }

    public function destroy(Rezerwacja $rezerwacja)
    {
        $rezerwacja->delete();
        return redirect()->route('rezerwacja.index');
    }
}
