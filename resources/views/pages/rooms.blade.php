@extends('main')

@section('title' , '| Rooms')
@section('content')

<header>
    <div class="container mx-auto px-6 py-3">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="w-full my-4 md:my-0 text-gray-600 flex items-center">
                <div>
                    <label for="">Price</label>
                    <select class="border p-2 rounded">
                        <option>High to low</option>
                        <option>Low to high</option>
                    </select>
                </div>
            </div>
            <div
                class="hidden md:inline-block w-full text-gray-700 md:mr-5 md:text-center text-xl md:text-2xl font-semibold">
                Rooms
            </div>
            <div class="w-full text-gray-600">
                <div>
                    <label for="">Room Type</label>
                    <select class="border p-2 rounded">
                        <option>Single</option>
                        <option>Double</option>
                        <option>Executive</option>
                    </select>
                </div>
            </div>
        </div>




    </div>
</header>

<main class="my-8">
    <div class="container mx-auto px-6">
        <h3 class="text-gray-700 text-2xl font-medium">Rooms</h3>
        <span class="mt-3 text-sm text-gray-500">200+ Rooms</span>
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
            @foreach ($rooms as $room)
            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                <a href="{{ route('room.show', $room->slug ) }}">
                    <div class="flex items-end justify-end h-56 w-full bg-cover"
                        style="background-image: url('{{ asset('img/rooms/'.$room->slug.'.jpg') }}')">
                        <button
                            class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </a>
                <div class="px-5 py-3">
                    <a href="{{ route('room.show', $room->slug ) }}" class="text-gray-700 uppercase">
                        {{ $room->name }}
                    </a>
                    <span class="text-gray-500 mt-2">{{ $room->price }}TZS/night</span>
                </div>
            </div>
            @endforeach

        </div>
        <div class="flex justify-center">
            <div class="flex rounded-md mt-8">
                <a href="#"
                    class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 ml-0 rounded-l hover:bg-blue-500 hover:text-white"><span>Previous</a></a>
                <a href="#"
                    class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>1</span></a>
                <a href="#"
                    class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>2</span></a>
                <a href="#"
                    class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>3</span></a>
                <a href="#"
                    class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 rounded-r hover:bg-blue-500 hover:text-white"><span>Next</span></a>
            </div>
        </div>
    </div>
</main>


</div>
@endsection

@section('scripts')

{{-- <script src="{{ asset('js/datepicker.js') }}"></script> --}}
@endsection
