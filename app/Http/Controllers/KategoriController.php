<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
class KategoriController extends Controller
{
    //fungsi untuk menampilkan data tabel kategori
    public function kategori() {
        // simpan data kedalam variabel
        $kategori = Kategori::all();
        return view('backend/kategori', compact('kategori'));
    }

    //fungsi menampilkan page tambah kategori
    public function tambah() {
        return view('backend/kategori/tambah');
    }
    
    //fungsi meng INSERT data
    public function create(Request $request) {
        $request->validate([
            'nama' => 'required',
        ]);

        Kategori::create($request->all());
        return redirect()->route('kategori')->with('success', 'Boleh mapuluh ya jangan lupa di tf');
    }  

    // fungsi DELETE data
    public function destroy (Kategori $kategori){
        $kategori->delete();

        // return redirect untuk mengarahkan ketika button di klik
        return redirect()->route('kategori')->with('delete', 'Kategori has been slain'); 
    }

    // fungsi menampilkan page edit
    public function edit(Kategori $kategori) {
        return view('backend/kategori/edit', compact('kategori'));
    }

    // fungsi UPDATE data
    public function update(Request $request, Kategori $kategori){
        $request->validate([
            'nama' => 'required',
        ]);

        $kategori->update($request->all());
        return redirect()->route('kategori')->with('update', 'Kategori+ revamp data menjadi lebih baru');
    }
}
