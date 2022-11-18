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

    public function maps(Location $location)
    {
        return view('location.maps', compact('location'));
    }

    public function show(Location $location)
    {
        return view('location.detail', compact('location'));
    }

    public function store(Request $request)
    {
        $validate = [
            'name' => 'required|max:255',
        ];

        $validatedData = $request->validate($validate);

        $location = Location::create($validatedData);
        return redirect('/location');
    }

    public function delete(Location $location){
        $location->delete();
        return back();
    }
}
