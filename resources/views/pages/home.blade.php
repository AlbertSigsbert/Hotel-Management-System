@extends('main')

@section('css')
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">


<style>
    .w-100 {
        width: 100% !important;
        height: 90vh;
    }

    ::-webkit-datetime-edit {
        color: transparent;
    }

    :focus::-webkit-datetime-edit {
        color: #000;
    }

</style>
@endsection
@section('content')

@include('layouts.carousel')


<!-- Booking Search Card -->
<div class="container mx-auto my-5 flex justify-center items-center border border-transparent p-8 shadow-lg">
    <div class="flex flex-col  md:flex-row items-center w-3/4">
        <div id="datetimepicker">
            <label for="check-in" class="block">Check-in</label>
            <input type="date" name="check-in" id="check-in" class="border-b border-gray-500 focus:outline-none">
        </div>
        <div id="datetimepicker" class="mx-8 my-8 md:my-0">
            <label for="check-out" class="block">Check-out</label>
            <input type="date" name="check-out" id="check-out" class="border-b border-gray-500 focus:outline-none">
        </div>
        <div>
            <label for="adults" class="block">Adults</label>
            <select class="border px-12 py-2 rounded">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
        </div>
        <div class="mx-8 my-8 md:my-0">
            <label for="children" class="block">Children</label>
            <select class="border px-12 py-2 rounded">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
        </div>
        <div>
            <label for="search" class="block mb-4"></label>
            <button class="px-12 py-2 border rounded-md bg-gray-800 text-white uppercase font-semibold">
                Search
            </button>
        </div>

    </div>


</div>

<!-- This is an showcase component -->
<div class="container mx-auto my-5">

    <div class="relative rounded-lg flex flex-col md:flex-row items-center md:shadow-xl md:h-72 mx-2">

        <div
            class="z-0 order-1 md:order-2 relative w-full md:w-2/5 h-80 md:h-full overflow-hidden rounded-lg md:rounded-none md:rounded-r-lg">
            <div class="absolute inset-0 w-full h-full object-fill object-center bg-blue-400 bg-opacity-30 bg-cover bg-bottom"
                style="background-image: url( https://images.unsplash.com/photo-1525302220185-c387a117886e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80 ); background-blend-mode: multiply;">
            </div>
            <div
                class="md:hidden absolute inset-0 h-full p-6 pb-6 flex flex-col-reverse justify-start items-start bg-gradient-to-b from-transparent via-transparent to-gray-900">
                <h3 class="w-full font-bold text-2xl text-white leading-tight mb-2">HOTEL AMANEE</h3>
                <h4 class="w-full text-xl text-gray-100 leading-tight">Bienvenido a</h4>
            </div>
            <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-white -ml-12"
                viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
        </div>

        <div class="z-10 order-2 md:order-1 w-full h-full md:w-3/5 flex items-center -mt-6 md:mt-0">
            <div
                class="p-8 md:pr-18 md:pl-14 md:py-12 mx-2 md:mx-0 h-full bg-white rounded-lg md:rounded-none md:rounded-l-lg shadow-xl md:shadow-none">
                <h4 class="hidden md:block text-xl text-gray-400">Bienvenido a</h4>
                <h3 class="hidden md:block font-bold text-2xl text-gray-700">HOTEL AMANEE</h3>
                <p class="text-gray-600 text-justify">Welcome back to our waterfront retreat, in the heart of Tanzania
                    Africa's bustling, breathtaking city. Nestled between the dramatic peaks of Table Mountain
                    and the roaring Atlantic Ocean, you’ll spend warm leisurely days by glistening pools or basked in
                    relaxation at our spa,</p>
                <a class="flex items-baseline mt-3 text-blue-600 hover:text-blue-900 focus:text-blue-900" href="">
                    <span>Conocer más de Amanee</span>
                    <span class="text-xs ml-1">&#x279c;</span>
                </a>
            </div>
        </div>

    </div>
</div><!-- End Showcase Components -->

<!-- Featured Rooms -->
<div class="featured-rooms">
    <h2 class="text-3xl font-semibold italic my-5 text-center">Featured Rooms</h2>
</div>
<div class="container grid grid-cols-1 place-items-center md:grid-cols-3 gap-4 antialiased my-5 text-gray-900">
    <!--Room-->
    @foreach ($rooms as $room)
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <a href="{{ route('room.show', $room->slug ) }}">
            <div class="flex items-end justify-end h-56 w-full bg-cover"
                style="background-image: url('{{ asset('img/rooms/'.$room->slug.'.jpg') }}')">
                <button
                    class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                </button>
            </div>
        </a>
        <div class="px-6 py-4">
            <a href="{{ route('room.show', $room->slug ) }}" class="font-bold text-xl mb-2">
                {{ $room->name }}
            </a>
            <p class="text-gray-700 text-base">
                {{ $room->details }}
            </p>
        </div>
        <hr class="w-3/4 mx-auto hover:bg-blue-500 transition duration-500 ease-in-out">
        <div class="p-4">
            <span class="text-2xl text-gray-300">Price: </span>
            <span class="text-3xl">{{ $room->price }} TZS/</span>
            <span>night</span>
        </div>
    </div>
    @endforeach


</div><!-- End of wrapper -->

<div class="grid place-items-center my-4">
    <a href="{{ route('room.index') }}"
        class="px-12 py-4 border rounded-md bg-gray-800 text-white uppercase font-semibold hover:no-underline hover:bg-gray-600  inline-flex items-center">
        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />

        </svg>
        <span>View More Rooms</span>
    </a>
</div>

@endsection

@section('scripts')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js">
</script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker').datetimepicker();
    });

</script>
@endsection
