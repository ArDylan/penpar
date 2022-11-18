<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gemastik</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.min.js" integrity="sha512-Atu8sttM7mNNMon28+GHxLdz4Xo2APm1WVHwiLW9gW4bmHpHc/E2IbXrj98SmefTmbqbUTOztKl5PDPiu0LD/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
    @yield('css')
</head>
<body class="bg-gray-200">
    <div class="flex">
        @include("layouts.sidebar")
        <div class="w-screen">
            @include('layouts.navbar')
            <div class="mx-10 mt-10 rounded-lg p-10 bg-white shadow flex">
                
                <div href="#" class="flex mx-5 max-w-sm p-6 bg-white border border-gray-200 rounded-lg">
                    <h5 class="mr-5 tracking-tight text-gray-900"><i class="fa-solid fa-location-dot"></i></h5>
                    <p class="border-r-2 border-black pr-2 font-normal text-gray-700">Lokasi terpasang</p>
                    <h5 class="ml-2">{{$location}}</h5>
                </div>
                <div href="#" class="flex mx-5 max-w-sm p-6 bg-white border border-gray-200 rounded-lg">
                    <h5 class="mr-5 tracking-tight text-gray-900"><i class="fa-solid fa-camera"></i></h5>
                    <p class="border-r-2 border-black pr-2 font-normal text-gray-700">Perangkat Terpasang</p>
                    <h5 class="ml-2">{{$points->count()}}</h5>
                </div>
                <div href="#" class="flex mx-5 max-w-sm p-6 bg-white border border-gray-200 rounded-lg">
                    <h5 class="mr-5 tracking-tight text-gray-900"><i class="fa-solid fa-square-parking"></i></h5>
                    <p class="border-r-2 border-black pr-2 font-normal text-gray-700">Pelanggaran Hari ini</p>
                    <h5 class="ml-2">{{$violation}}</h5>
                </div>


            </div>
            <div class="flex m-5">
                <div class="flex-1 bg-white shadow p-10 rounded-lg m-5">
                    <div class="flex mb-5">
                        <h1 class="text-xl flex-1 font-medium">Cam Location</h1>
                    </div>
                    
                    <div id="map" class="h-[40vh] md:h-[50vh] lg:h-[60vh] xl:h-[60vh] rounded-xl drop-shadow-lg" data-aos="zoom-in">
                        <a href="https://www.maptiler.com" style="position:absolute;left:10px;bottom:10px;z-index: -99;">
                        <img src="https://api.maptiler.com/resources/logo.svg" alt="MapTiler logo">
                        </a>
                    </div>
                </div>
                {{-- <div class="flex-1 bg-white shadow p-10 rounded-lg m-5">
                    <h1 class="text-xl font-medium">Statistik Pelanggaran</h1>
                    @livewireStyles
                        @livewire('statistic-component')
                    @livewireScripts
                </div> --}}
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    
    <script>
        var map = L.map('map').setView([-1.234266, 116.866195], 12);
        L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=ufd9SQXbKXY4R8BfHuby',{
            tileSize: 512,
            zoomOffset: -1,
            minZoom: 1,
            attribution: "\u003ca href=\"https://www.maptiler.com/copyright/\" target=\"_blank\"\u003e\u0026copy; MapTiler\u003c/a\u003e \u003ca href=\"https://www.openstreetmap.org/copyright\" target=\"_blank\"\u003e\u0026copy; OpenStreetMap contributors\u003c/a\u003e",
            crossOrigin: true,
            zoomControl: false
        }).addTo(map);
        @foreach ($points as $point)
            L.marker([{{$point->latitude}}, {{$point->longitude}}], {title: 'asd'}).addTo(map).bindPopup('<div class=\'text-center\'>'+{!!"'" . $point->name . "'"!!}+'</div>');
        @endforeach
        
    </script>

    @include("layouts.footer")
    @yield('script')
</body>
</html>