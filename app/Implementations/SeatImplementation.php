<?php

namespace App\Implementations;

use App\Contracts\SeatInterface;
use App\Models\seatBooking;
use App\Repository\SeatRepository;

class SeatImplementation implements SeatInterface
{

    public function create($request)
    {
        $flight = new seatBooking;

        $flight->seat_ticket_booking_id = $request->id;
        $flight->name = $request->name;
        $flight->movie = $request->movie;
        $flight->seat_booked = implode(',', $request->seat_booked);
        $flight->amount = $request->amount;

        $flight->save();
    }
}
