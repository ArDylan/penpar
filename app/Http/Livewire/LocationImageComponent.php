<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use Livewire\Component;

use App\Models\PointImage;
use App\Models\Point;

class LocationImageComponent extends Component
{
    use WithPagination;

    public $location;
    public $point = "*";
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
        });

        if ($this->startDate != null) {
            $images = $images->where("created_at", ">=", $this->startDate);
        }

        if ($this->endDate) {
            $images = $images->where("created_at", "<=", $this->endDate);
        }

        if ($this->point != "*") {
            $images = $images->where("point_id", $this->point);
        }
        
        $images = $images->paginate(20);
        $camera_points = Point::where('location_id', $location->id)->get();

        return view('livewire.location-image-component', compact(["camera_points", "images", "location"]));
    }
}
