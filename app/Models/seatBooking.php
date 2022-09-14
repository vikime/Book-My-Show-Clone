<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seatBooking extends Model
{
    protected $primarykey = 'seat_ticket_booking_id';
    protected $table = 'seat_ticket_booking';
    protected $fillable = [
        'seat_ticket_booking_id',
        'name',
        'seat_booked',
        'amount'
    ];
}
