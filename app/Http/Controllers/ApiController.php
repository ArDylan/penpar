<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PointImage;

class ApiController extends Controller
{
    public function createImage(Request $request)
    {
        $nameFile = $request->point_id . "-" . $request->image->getClientOriginalName();
        $request->image->storeAs(
            'public/image', $nameFile
        );
        PointImage::create([
            "point_id" => $request->point_id,
            "note" => $request->note,
            "images" => $nameFile
        ]);
        
        return true;
    }
}
