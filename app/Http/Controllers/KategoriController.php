<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //fungsi untuk menampilkan
    public function kategori() {
        return view('backend/kategori');
    }
}
