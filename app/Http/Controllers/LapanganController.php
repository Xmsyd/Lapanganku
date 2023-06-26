<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LapanganController extends Controller
{
    //Tampilkan Page
    public function lapangan() {
        return view('backend/lapangan');
    }
}
