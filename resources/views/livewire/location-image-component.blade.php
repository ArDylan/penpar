<div>
    {{-- Do your work, then step back. --}}
    <div class="flex mb-5">
        <h1 class="text-xl flex-1 font-medium">{{$location->name}}</h1>
        <select wire:model="point" name="point_id" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-36 p-2.5">
            <option value="*">All</option>
            @foreach ($camera_points as $camera)
                <option value="{{$camera->id}}">{{$camera->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-5">
        <label class="text-md" for="">Date</label>
        <div class="flex">
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <input wire:model="startDate" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder="Select date">
            </div>
            <div class="ml-5 relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <input wire:model="endDate" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder="Select date">
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mb-5">
        @foreach ($images as $image)
        <div class="bg-white shadow rounded">
            <div class="group relative mb-1">
                <img class="w-full object-cover h-40 rounded-t"
                    src="{{$image->images}}" alt="{{$camera->name}}" />
                <div class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-slate-50 opacity-0 group-hover:h-full group-hover:opacity-100 duration-200">
                    <a class="text-[0.8rem] mt-5 px-8 py-2 rounded-full bg-yellow-400 hover:bg-yellow-600 duration-300" href="{{route('point.maps', ['point' => $camera->id])}}">{{$camera->name}} 
                    {{-- <i class="fa-solid fa-download"></i> --}}
                    <i class="fa-solid fa-location-dot"></i>
                    </a>
                </div>
            </div>
            <div class="p-2">
                <label for="">{{Carbon\Carbon::parse($image->created_at)->format('d/m/Y h:i:s')}}</label>
            </div>
        </div>
        @endforeach
    </div>
    {{ $images->links() }}
</div>
