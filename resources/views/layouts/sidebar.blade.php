
<aside class="hidden lg:flex w-64 min-h-screen" aria-label="Sidebar">
    <div class="w-64 overflow-y-auto py-4 px-5 bg-gray-50 bg-gray-800">
       <a href="/" class="flex items-center pl-2.5 mb-5">
          {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-7" alt="Flowbite Logo"> --}}
          <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">PENPAR</span>
       </a>
       <a href="" class="h-screen fixed"></a>
       <ul class="space-y-2">
          <li>
             <a href="" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <i class="fa-solid fa-users"></i>               
               <span class="ml-3">User management</span>
             </a>
          </li>
          <li>
             <a href="{{route('location')}}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <i class="fa-solid fa-location-dot"></i>
               <span class="flex-1 ml-3 whitespace-nowrap">Lokasi</span>
                {{-- <span class="inline-flex justify-center items-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span> --}}
             </a>
          </li>
          <li>
             <a href="{{route('point')}}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <i class="fa-solid fa-server"></i>               
               <span class="flex-1 ml-3 whitespace-nowrap">Data Perangkat</span>
                {{-- <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span> --}}
             </a>
          </li>
    </div>
 </aside>
