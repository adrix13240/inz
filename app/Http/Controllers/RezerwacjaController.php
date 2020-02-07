<?php

namespace App\Http\Controllers;
use App\Rezerwacja;
use Illuminate\Http\Request;

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
        return view('rezerwacja.create');
    }

    public function store(Request $request)
    {
        Rezerwacja::create($request->all());
        return redirect()->route('rezerwacja.index');
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
