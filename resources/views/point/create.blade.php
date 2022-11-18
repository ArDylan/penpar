@extends('layouts.app')

@section('content')

<h1 class="text-lg flex-1 font-medium">Tambah Perangkat</h1>

<form action="{{route('point.store')}}" class="mt-10" method="post">
    @csrf
    <div class="mb-6">
      <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
      <input name="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Name">
    </div>
    <div class="mb-6">
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Nama Jalan</label>
        <select id="select-state" name="location_id" placeholder="Pick a state...">
            <option value="">Select a street...</option>
            @foreach ($locations as $location)
                <option value="{{$location->id}}">{{$location->name}}</option>
            @endforeach
          </select>        
    </div>
    <div class="mb-6">
        <label for="latitude" class="block mb-2 text-sm font-medium text-gray-900">Garis Lintang</label>
        <input name="latitude" type="text" id="latitude" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Name">
      </div>
      <div class="mb-6">
        <label for="longitude" class="block mb-2 text-sm font-medium text-gray-900">Garis Bujur</label>
        <input name="longitude" type="text" id="longitude" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Name">
      </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
</form>

<script>
      $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });
</script>
@endsection
