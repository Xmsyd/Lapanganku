<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Lapangan;
use App\Models\Booking;
use App\Models\user;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home()
    {

        $kategori = Kategori::all();
        $lapangan = Lapangan::all();
        $bookings  = Booking::all();
        $user = User::all();
        return view('welcome', compact('kategori', 'lapangan', 'bookings', 'user'));
    }

    public function about()
    {
        return view('about');
    }

    public function detail($id)
    {
        $lapangan = Lapangan::find($id);
        $kategori = Kategori::find($lapangan->kategori_id);
        return view('detail', compact('lapangan', 'kategori'));
    }

    public function booking(request $request) {
        $request->validate([
            'user_id' => 'required',
            'lapangan_id' => 'required',
            'tanggal' => 'required',
            'jam_mulai' => 'required',
            'jam_akhir' => 'required',
            'durasi' => 'required',
        ]);
        
        Booking::create($request->all());
        return redirect('/')->with('success', 'bookings berhasil disimpan');
}
}