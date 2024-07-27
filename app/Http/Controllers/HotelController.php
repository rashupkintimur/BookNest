<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index() {
        $hotels = Hotel::all();

        return view("hotels.index", ["hotels" => $hotels]);
    }

    public function show(int $id) {
        $hotel = Hotel::findOrFail($id);
        $rooms = Room::where("hotel_id", $id)->get();

        return view("hotels.show", ["hotel" => $hotel, "rooms" => $rooms]);
    }
}
