<?php

namespace App\Http\Controllers;

use App\Marka;
use Illuminate\Http\Request;

class MarkaController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $markas = Marka::latest()->get();
        return view('marka.index', ['markas' => $markas]);
    }

    public function show(Marka $marka)
    {
        return view('marka.show', ['marka' => $marka]);
    }

    public function create()
    {
        return view('marka.create');
    }

    public function store(Request $request)
    {
        Marka::create($request->all());
        return redirect()->route('marka.index');
    }

    public function edit(Marka $marka)
    {
        return view('marka.edit', compact('marka'));
    }

    public function update(Request $request, Marka $marka)
    {
        $marka->update($request->all());
        return redirect()->route('marka.index');
    }

    public function destroy(Marka $marka)
    {
        $marka->delete();
        return redirect()->route('marka.index');
    }
}
