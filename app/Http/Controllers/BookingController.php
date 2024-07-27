<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BookingController extends Controller
{
    public function index() {
        $bookings = Booking::all();

        return view("bookings.index", ["bookings" => $bookings]);
    }

    public function show(int $id) {
        $booking = Booking::findOrFail($id);

        return view("bookings.show", ["booking" => $booking]);
    }

    public function store(Request $request) {
        $booking = new Booking();

        $started_at = Carbon::createFromFormat("Y-m-d", $request->started_at);
        $finished_at = Carbon::createFromFormat("Y-m-d", $request->finished_at);

        $booking->room_id = $request->room_id;
        $booking->user_id = Auth()->user()->id;
        $booking->started_at = $started_at;
        $booking->finished_at = $finished_at;
        $booking->days = $finished_at->diffInDays($started_at);
        $booking->price = Room::findOrFail($request->room_id)->price * $booking->days;

        $booking->save();

        return redirect("/hotels");
    }
}
