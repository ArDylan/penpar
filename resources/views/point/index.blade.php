@extends('layouts.app')

@section('content')
<div class="flex">
    <h1 class="text-lg flex-1 font-medium">Data Perangkat</h1>
    <div class="flex-none">
        <a href="{{route('point.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Daftar</a>
    </div>   
</div>

@livewireStyles
    @livewire('point-component')
@livewireScripts

@endsection
