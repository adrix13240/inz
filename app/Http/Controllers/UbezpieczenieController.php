<?php

namespace App\Http\Controllers;

use App\Ubezpieczenie;
use Illuminate\Http\Request;

class UbezpieczenieController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $ubezpieczenies = Ubezpieczenie::latest()->get();
        return view('ubezpieczenie.index', ['ubezpieczenies' => $ubezpieczenies]);
    }

    public function show(Ubezpieczenie $ubezpieczenie)
    {
        return view('ubezpieczenie.show', ['ubezpieczenie' => $ubezpieczenie]);
    }

    public function create()
    {
        return view('ubezpieczenie.create');
    }

    public function store(Request $request)
    {
        Ubezpieczenie::create($request->all());
        return redirect()->route('ubezpieczenie.index');
    }

    public function edit(Ubezpieczenie $ubezpieczenie)
    {
        return view('ubezpieczenie.edit', compact('ubezpieczenie'));
    }

    public function update(Request $request, Ubezpieczenie $ubezpieczenie)
    {
        $ubezpieczenie->update($request->all());
        return redirect()->route('ubezpieczenie.index');
    }

    public function destroy(Ubezpieczenie $ubezpieczenie)
    {
        $ubezpieczenie->delete();
        return redirect()->route('ubezpieczenie.index');
    }
}
