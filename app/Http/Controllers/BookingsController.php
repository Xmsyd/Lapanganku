<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingsController extends Controller
{
    Public Function bookings (){
        // simpan data kedalam variabel
        $bookings = Booking::all();
        return view('backend/bookings', compact('bookings'));
    }
}
