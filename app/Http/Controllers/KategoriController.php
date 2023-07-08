<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
class KategoriController extends Controller
{
    //fungsi untuk menampilkan
    public function kategori() {
        // simpan data kedalam variabel
        $kategori = Kategori::all();
        return view('backend/kategori', compact('kategori'));
    }
}
