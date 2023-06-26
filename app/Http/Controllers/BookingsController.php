<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingsController extends Controller
{
    Public Function bookings (){
        return view('backend/bookings');
    }
}
