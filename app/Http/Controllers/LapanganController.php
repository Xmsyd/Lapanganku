<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapangan;

class LapanganController extends Controller
{
    //Tampilkan Page
    public function lapangan() {
        // Simpan data kedalam variabel
        $lapangan = Lapangan::all();
        return view('backend/lapangan', compact('lapangan'));
    }
}
