<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PointImage;

class ApiController extends Controller
{
    public function createImage(Request $request)
    {
        PointImage::create([
            "point_id" => $request->point_id,
            "note" => $request->note,
            "images" => "https://cdn1-production-images-kly.akamaized.net/Az6f4vox01osWGdRHyQnSt3hlhU=/1200x900/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3716202/original/023989000_1639554358-0000465749.jpg"
        ]);
        
        return true;
    }
}
