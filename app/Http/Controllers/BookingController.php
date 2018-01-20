<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Client;
use App\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        $clients = Client::all();
        $rooms = Room::where('status', 1)->get();
        return view('bookings.create', compact('clients', 'rooms'));
    }

    public function store(Request $request)
    {
        // Validate the Form
        $request->validate([
            'client_id' => 'required',
            'room_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        // Dave into Database
        Booking::create($request->all());

        // Update Rooms status
        $room = Room::find($request->room_id);
        $room->status = 0;
        $room->save();

        session()->flash('msg','The Room Has been booked');

        return redirect('/booking');
    }


    public function show(Booking $booking)
    {
        //
    }

    public function edit(Booking $booking)
    {
        $booking = Booking::find($booking->id);
        return view('bookings.edit');
    }

    public function update(Request $request, Booking $booking)
    {
        //
    }


    public function destroy(Booking $booking)
    {
        //
    }

}
