<?php

namespace App\Http\Controllers;
use App\TerminRezerwacji;
use Illuminate\Http\Request;

class TerminRezerwacjiController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $terminRezerwacjis = TerminRezerwacji::latest()->get();
        return view('terminRezerwacji.index', ['terminRezerwacjis' => $terminRezerwacjis]);
    }

    public function show(TerminRezerwacji $terminRezerwacji)
    {
        return view('terminRezerwacji.show', ['terminRezerwacji' => $terminRezerwacji]);
    }

    public function create()
    {
        return view('terminRezerwacji.create');
    }

    public function store(Request $request)
    {
        TerminRezerwacji::create($request->all());
        return redirect()->route('terminRezerwacji.index');
    }

    public function edit(TerminRezerwacji $terminRezerwacji)
    {
        return view('terminRezerwacji.edit', compact('terminRezerwacji'));
    }

    public function update(Request $request, TerminRezerwacji $terminRezerwacji)
    {
        $terminRezerwacji->update($request->all());
        return redirect()->route('terminRezerwacji.index');
    }

    public function destroy(TerminRezerwacji $terminRezerwacji)
    {
        $terminRezerwacji->delete();
        return redirect()->route('terminRezerwacji.index');
    }
}
