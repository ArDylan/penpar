<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Location;

class StatisticComponent extends Component
{
    public function render()
    {   
        // $locations = Location::with("points")->with("points.pointImages")->where("points.pointImages.created_at", ">=", date("Y-m-j 00:00:00"))->get();
        // dd($locations);
        return view('livewire.statistic-component');
    }
}
