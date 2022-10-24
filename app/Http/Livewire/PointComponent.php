<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;

use App\Models\Point;

class PointComponent extends LivewireDatatable
{
    public $model = Point::class;
    public $point;

    public function builder()
    {
        $point = Point::query();
        return $point;
    }

    function columns()
    {
        return [
            Column::name('id')
            ->label('Id Camera')
            ->alignCenter()
            ->sortBy('name'),
            Column::name('name')
            ->label('Nama Camera')
            ->alignCenter()
            ->sortBy('name'),
            Column::name('location.name')
            ->label('Nama Jalan')
            ->alignCenter()
            ->sortBy('location.name'),
            Column::name('latitude')
            ->label('Garis Lintang')
            ->alignCenter()
            ->sortBy('latitude'),
            Column::name('longitude')
            ->label('Garis Bujur')
            ->alignCenter()
            ->sortBy('longitude'),
            Column::callback(['id'], function($id) {
                return "
                <div class=\"my-5 justify-center flex\">
                <a href=\"/location/delete/$id\" class=\"block md:w-10 text-center text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-2.5 py-2.5 ml-3 bg-red-500 hover:bg-red-800 focus:ring-red-400\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></a>
                <a href=\"/location/$id\" class=\"block md:w-10 text-center text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-2.5 py-2.5 ml-3 bg-amber-300 hover:bg-amber-200 focus:ring-amber-400\"><i class=\"fa fa-edit\" aria-hidden=\"true\"></i></a>
                </div>";
            })
            ->label('Aksi')
            ->alignCenter()
            ->unsortable(),
        ];
    }
}
