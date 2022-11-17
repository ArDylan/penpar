<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PointImage;
use App\Models\Point;

class LocationImageComponent extends Component
{
    public $location;
    public $point;
    public $startDate;
    public $endDate;

    public function mount($location)
    {
        $this->location = $location;
    }

    public function render()
    {
        $location = $this->location;
        $images = PointImage::whereHas('point', function ($query) {
            return $query->where('location_id', $this->location->id);
        })->get();
        $camera_points = Point::where('location_id', $location->id)->get();
        return view('livewire.location-image-component', compact(["camera_points", "images", "location"]));
    }

    public function updating()
    {
        dd("Asdfas");
    }
}
