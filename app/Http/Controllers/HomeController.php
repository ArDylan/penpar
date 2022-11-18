<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Point;
use App\Models\Location;
use App\Models\PointImage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $points = Point::all();
        $location = Location::all()->count();
        $violation = PointImage::where("created_at", ">=", date("Y-m-j 00:00:00"))->get()->count();
        return view('dashboard', compact(["points", "location", "violation"]));
    }
}
