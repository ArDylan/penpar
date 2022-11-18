@extends('layouts.app')

@section('content')

@livewireStyles
    @livewire('location-image-component', ['location' => $location])
@livewireScripts

@endsection
