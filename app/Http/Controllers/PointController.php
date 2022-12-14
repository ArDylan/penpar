<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Point;

class PointController extends Controller
{
    public function index()
    {
        return view('point.index');
    }

    public function maps(Point $point)
    {
        return view('point.maps', compact('point'));
    }

    public function create()
    {
        $locations = Location::all();
        return view('point.create',compact('locations'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $validate = [
            'name' => 'required|max:255',
            'location_id' => 'required|max:255',
            'latitude' => 'required|max:255',
            'longitude' => 'required|max:255',
        ];

        $validatedData = $request->validate($validate);

        $testimoni = Point::create($validatedData);
        return redirect('/point');
    }
}
