<?php

namespace App\Http\Controllers;
use App\Segment;
use Illuminate\Http\Request;

class SegmentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $segments = Segment::latest()->get();
        return view('segment.index', ['segments' => $segments]);
    }

    public function show(Segment $segment)
    {
        return view('segment.show', ['segment' => $segment]);
    }

    public function create()
    {
        return view('segment.create');
    }

    public function store(Request $request)
    {
        Segment::create($request->all());
        return redirect()->route('segment.index');
    }

    public function edit(Segment $segment)
    {
        return view('segment.edit', compact('segment'));
    }

    public function update(Request $request, Segment $segment)
    {
        $segment->update($request->all());
        return redirect()->route('segment.index');
    }

    public function destroy(Segment $segment)
    {
        $segment->delete();
        return redirect()->route('segment.index');
    }
}
