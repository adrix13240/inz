<?php

namespace App\Http\Controllers;
use App\StatusRezerwacji;
use Illuminate\Http\Request;

class StatusRezerwacjiController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $statusRezerwacjis = StatusRezerwacji::latest()->get();
        return view('statusRezerwacji.index', ['statusRezerwacjis' => $statusRezerwacjis]);
    }

    public function show(StatusRezerwacji $statusRezerwacji)
    {
        return view('statusRezerwacji.show', ['statusRezerwacji' => $statusRezerwacji]);
    }

    public function create()
    {
        return view('statusRezerwacji.create');
    }

    public function store(Request $request)
    {
        StatusRezerwacji::create($request->all());
        return redirect()->route('statusRezerwacji.index');
    }

    public function edit(StatusRezerwacji $statusRezerwacji)
    {
        return view('statusRezerwacji.edit', compact('statusRezerwacji'));
    }

    public function update(Request $request, StatusRezerwacji $statusRezerwacji)
    {
        $statusRezerwacji->update($request->all());
        return redirect()->route('statusRezerwacji.index');
    }

    public function destroy(StatusRezerwacji $statusRezerwacji)
    {
        $statusRezerwacji->delete();
        return redirect()->route('statusRezerwacji.index');
    }
}
