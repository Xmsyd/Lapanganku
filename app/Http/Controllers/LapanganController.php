<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapangan;
use App\Models\Kategori;

class LapanganController extends Controller
{
    //Tampilkan Page
    public function lapangan() {
        // Simpan data kedalam variabel
        $lapangan = Lapangan::all();
        return view('backend/lapangan', compact('lapangan'));
    }

    // fungsi VIEW page tambah
    public function tambah(Lapangan $lapangan, Kategori $kategori) {

        $kategori = Kategori::all();
        return view('backend/lapangan/tambah', compact('lapangan','kategori'));
    }

    // fungsi INSERT data
    public function create(request $request) {
        $request->validate([
            'nama_lap' => 'required',
            'lokasi' => 'required',
            'harga_perjam' => 'required',
            'kategori_id' => 'required',
        ]);
        
        Lapangan::create($request->all());
        return redirect('backend/lapangan')->with('success', 'Lapangan berhasil disimpan');
    }

    // fungsi DELETE data
    public function destroy (Lapangan $lapangan){
        $lapangan->delete();

        // return redirect untuk mengarahkan ketika button di klik
        return redirect()->route('lapangan')->with('delete', 'lapangan telah di gusur'); 
    }

    // fungsi menampilkan page edit
    public function edit(Lapangan $lapangan, Kategori $kategori) {

        $kategori = Kategori::all();
        return view('backend/lapangan/edit', compact('lapangan','kategori'));
    }

    // fungsi UPDATE data
    public function update(Request $request, Lapangan $lapangan){
        $request->validate([
            'nama_lap' => 'required',
            'lokasi' => 'required',
            'harga_perjam' => 'required',
            'kategori_id' => 'required',
        ]);

        $lapangan->update($request->all());
        return redirect()->route('lapangan')->with('success', 'lapangan telah di perbarui');
    }
    



}
