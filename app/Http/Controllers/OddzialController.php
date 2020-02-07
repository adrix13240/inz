<?php

namespace App\Http\Controllers;

use App\Http\Requests\OddzialRequest;
use App\Oddzial;
use Illuminate\Http\Request;

class OddzialController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $oddzials = Oddzial::latest()->get();
        return view('oddzial.index', ['oddzials' => $oddzials]);
    }

    public function show(Oddzial $oddzial)
    {
        $oddzials = Oddzial::findorFail($oddzial);
        return view('oddzial.show', ['oddzial' => $oddzial]);
    }

    public function create()
    {
        return view('oddzial.create');
    }

    public function store(Request $request)
    {
        Oddzial::create($request->all());
        return redirect()->route('oddzial.index');
    }

    public function edit(Oddzial $oddzial)
    {
        return view('oddzial.edit', compact('oddzial'));
    }

    public function update(Request $request, Oddzial $oddzial)
    {
        $oddzial->update($request->all());
        return redirect()->route('oddzial.index');
    }

    public function destroy(Oddzial $oddzial)
    {
        $oddzial->delete();
        return redirect()->route('oddzial.index');
    }
}
