<div class="my-5 justify-center flex">
    <a class="block md:w-10 text-center text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-2.5 py-2.5 ml-3 bg-amber-300 hover:bg-amber-200 focus:ring-amber-400" href="{{$link}}">
        <i class="fa fa-edit" aria-hidden="true"></i>
    </a>
    <form action="{{$link}}" method="post">
        @csrf
        @method('delete')
        <button class="block md:w-10 text-center text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-2.5 py-2.5 ml-3 bg-red-500 hover:bg-red-800 focus:ring-red-400">
            <i class="fa fa-trash" aria-hidden="true"></i>
        </button>
    </form>
</div>
{{-- <div class="my-5 justify-center flex">
    <a href="{{$link}}" class="block md:w-10 text-center text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-2.5 py-2.5 ml-3 bg-red-500 hover:bg-red-800 focus:ring-red-400"><i class="fa fa-trash" aria-hidden="true"></i></a>
    <a href="/location/$id" class="block md:w-10 text-center text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-2.5 py-2.5 ml-3 bg-amber-300 hover:bg-amber-200 focus:ring-amber-400"><i class="fa fa-edit" aria-hidden="true"></i></a>
</div> --}}