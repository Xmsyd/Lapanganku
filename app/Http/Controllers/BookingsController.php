<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;

class BookingsController extends Controller
{
    Public Function bookings (){
        // simpan data kedalam variabel
        $bookings = Booking::all();
        $user =     User::all();
        return view('backend/bookings', compact('bookings', 'user'));
    }


    // fungsi VIEW page tambah
    public function tambah (Booking $bookings, User $users) {

        $users = user::all();
        return view('backend/booking/tambah', compact('bookings','users'));
    }

    // fungsi INSERT data
    public function create(request $request) {
        $request->validate([
            'user_id' => 'required',
            'lapangan_id' => 'required',
            'tanggal' => 'required',
            'jam_mulai' => 'required',
            'jam_akhir' => 'required',
            'durasi' => 'required',
        ]);
        
        Booking::create($request->all());
        return redirect('backend/bookings')->with('success', 'bookings berhasil disimpan');
    }

    // fungsi DELETE data
    public function destroy (Booking $bookings){
        $bookings->delete();

        // return redirect untuk mengarahkan ketika button di klik
        return redirect()->route('booking')->with('delete', 'bookings telah di gusur'); 
    }

    // fungsi menampilkan page edit
    public function edit(Booking $bookings, User $users) {

        $users = user::all();
        return view('backend/booking/edit', compact('bookings','users'));
    }

    // fungsi UPDATE data
    public function update(Request $request, Booking $bookings){
        $request->validate([
            'user_id' => 'required',
            'lapangan_id' => 'required',
            'tanggal' => 'required',
            'jam_mulai' => 'required',
            'jam_akhir' => 'required',
            'durasi' => 'required',
        ]);

        $bookings->update($request->all());
        return redirect()->route('booking')->with('success', 'bookings telah di perbarui');
    }

}
