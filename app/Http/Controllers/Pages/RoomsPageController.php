<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomsPageController extends Controller
{
    /**
     * Display a listing of Rooms.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::inRandomOrder()->take(9)->get();

        return view('pages.rooms')->with('rooms', $rooms);
    }



    /**
     * Display the specified Room.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
       $room = Room::where('slug', $slug)->firstOrFail();
       $otherRooms = Room::where('slug','!=', $slug)->inRandomOrder()->take(4)->get();

       return view('pages.room')->with([
           'room'=> $room,
           'otherRooms' => $otherRooms
       ]);
    }


}
