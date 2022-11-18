<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;

use App\Models\Location;

class LocationComponent extends LivewireDatatable
{
    public $model = Location::class;
    public $location;

    public function builder()
    {
        $location = Location::query();
        return $location;
    }

    function columns()
    {
        return [
            // Column::name('name')
            // ->label('Nama Jalan')
            // ->alignCenter()
            // ->sortBy('name'),
            Column::callback(['id','name'], function($id,$name) {
                return "
                <div class=\"my-5 justify-center flex\">
                <a href=\"/location/$id\" class=\"block w-full text-center font-medium rounded-lg text-sm px-2.5 py-2.5 ml-3 text-gray-600\">$name</a>
                </div>";
            })
            ->label('Nama Jalan')
            ->alignCenter()
            ->unsortable(),
            Column::callback(['id'], function($id) {
            return view('components.action-component', ['link' => '/location/action/' . $id]);
            })
            ->label('Aksi')
            ->alignCenter()
            ->unsortable(),
        ];
    }
}
