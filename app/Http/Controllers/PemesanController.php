<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemesanController extends Controller
{
    //tampilkan page
    public function pemesan (){
        return view('backend/pemesan');
    }
}
    