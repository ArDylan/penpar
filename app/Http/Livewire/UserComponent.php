<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;

use App\Models\User;

class UserComponent extends LivewireDatatable
{
    public $model = User::class;
    public $user;

    public function builder()
    {
        $user = User::query();
        return $user;
    }

    function columns()
    {
        return [
            Column::name('id')
            ->label('ID')
            ->alignCenter(),
            Column::name('name')
            ->label('Nama')
            ->alignCenter()
            ->sortBy('name'),
            Column::name('email')
            ->label('Email')
            ->alignCenter(),
            Column::callback(['id'], function($id) {
                return view('components.action-component', ['link' => '/user/action/' . $id]);
            })
            ->label('Aksi')
            ->alignCenter()
            ->unsortable(),
        ];
    }
}
