<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Point;

class LocationController extends Controller
{
    public function index()
    {
        return view('location.index');
    }

    public function show(Request $request, Location $location)
    {
        $camera_points = Point::where('location_id', $location->id)->get();
        return view('location.detail', compact('location', 'camera_points'));
    }

    public function store(Request $request)
    {
        $validate = [
            'name' => 'required|max:255',
        ];

        $validatedData = $request->validate($validate);

        $testimoni = Location::create($validatedData);
        return redirect('/location');
    }
}
