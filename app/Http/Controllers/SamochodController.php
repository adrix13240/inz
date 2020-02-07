<?php

namespace App\Http\Controllers;
use App\Marka;
use App\Samochod;
use App\Segment;
use Illuminate\Http\Request;

class SamochodController extends Controller
{
//    public function __construct() {
////        $this->middleware('auth');
////    }
///
    public function index()
    {
        $marki = Marka::get();
        $markaarray = array();
        foreach ($marki as $marka){
            $markaarray[$marka->id] = $marka->nazwa;
        }
        $segmenty = Segment::get();
        $segmentarray = array();
        foreach ($segmenty as $segment){
            $segmentarray[$segment->id] = $segment->nazwa;
        }
        $samochods = Samochod::latest()->get();
        return view('samochod.index', ['samochods' => $samochods])->with('marki', $markaarray)->with('segmenty', $segmentarray);
    }

    public function show(Samochod $samochod)
    {
        $marki = Marka::get();
        $markaarray = array();
        foreach ($marki as $marka){
            $markaarray[$marka->id] = $marka->nazwa;
        }
        $segmenty = Segment::get();
        $segmentarray = array();
        foreach ($segmenty as $segment){
            $segmentarray[$segment->id] = $segment->nazwa;
        }
        return view('samochod.show', ['samochod' => $samochod]);
    }

    public function create()
    {
        $marki = Marka::get();
        $markaarray = array();
        foreach ($marki as $marka){
            $markaarray[$marka->id] = $marka->nazwa;
        }
        $segmenty = Segment::get();
        $segmentarray = array();
        foreach ($segmenty as $segment){
            $segmentarray[$segment->id] = $segment->nazwa;
        }
        return view('samochod.create')->with('marki', $markaarray)->with('segmenty', $segmentarray);
    }

    public function store(Request $request)
    {
        $marki = Marka::get();
        $markaarray = array();
        foreach ($marki as $marka){
            $markaarray[$marka->id] = $marka->nazwa;
        }
        $segmenty = Segment::get();
        $segmentarray = array();
        foreach ($segmenty as $segment){
            $segmentarray[$segment->id] = $segment->nazwa;
        }
        Samochod::create($request->all());
        return redirect()->route('samochod.index');
    }

    public function edit(Samochod $samochod)
    {
        $marki = Marka::get();
        $markaarray = array();
        foreach ($marki as $marka){
            $markaarray[$marka->id] = $marka->nazwa;
        }
        $segmenty = Segment::get();
        $segmentarray = array();
        foreach ($segmenty as $segment){
            $segmentarray[$segment->id] = $segment->nazwa;
        }
        return view('samochod.edit', compact('samochod'))->with('marki', $markaarray)->with('segmenty', $segmentarray);
    }

    public function update(Request $request, Samochod $samochod)
    {
        $marki = Marka::get();
        $markaarray = array();
        foreach ($marki as $marka){
            $markaarray[$marka->id] = $marka->nazwa;
        }
        $segmenty = Segment::get();
        $segmentarray = array();
        foreach ($segmenty as $segment){
            $segmentarray[$segment->id] = $segment->nazwa;
        }
        $samochod->update($request->all());
        return redirect()->route('samochod.index');
    }

    public function destroy(Samochod $samochod)
    {
        $samochod->delete();
        return redirect()->route('samochod.index');
    }
}
