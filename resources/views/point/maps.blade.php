@extends('layouts.app')

@section('content')
<!-- Script for maps  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>


<div class="flex mb-5">
    <h1 class="text-xl flex-1 font-medium">Maps point {{$point->name}}</h1>
</div>

<div id="map" class="h-[40vh] md:h-[50vh] lg:h-[60vh] xl:h-[70vh] rounded-xl drop-shadow-lg" data-aos="zoom-in">
    <a href="https://www.maptiler.com" style="position:absolute;left:10px;bottom:10px;z-index: -99;">
    <img src="https://api.maptiler.com/resources/logo.svg" alt="MapTiler logo">
    </a>
</div>

<script>
    var map = L.map('map').setView([{{$point->latitude}}, {{$point->longitude}}], 20);
    L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=ufd9SQXbKXY4R8BfHuby',{
        tileSize: 512,
        zoomOffset: -1,
        minZoom: 1,
        attribution: "\u003ca href=\"https://www.maptiler.com/copyright/\" target=\"_blank\"\u003e\u0026copy; MapTiler\u003c/a\u003e \u003ca href=\"https://www.openstreetmap.org/copyright\" target=\"_blank\"\u003e\u0026copy; OpenStreetMap contributors\u003c/a\u003e",
        crossOrigin: true,
        zoomControl: false
    }).addTo(map);


  L.marker([{{$point->latitude}}, {{$point->longitude}}]).addTo(map); //.blindpopup

</script>

@endsection
