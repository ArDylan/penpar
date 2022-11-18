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
                return view('components.action-component', ['link' => '/point/action/' . $id]);
            })
            ->label('Aksi')
            ->alignCenter()
            ->unsortable(),
        ];
    }
}
