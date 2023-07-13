<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\models\Kategori;

class UsersController extends Controller
{
    //Tampilkan Page
    Public Function users (){
        // simpan data kedalam variabel
        $users = User::all();
        return view('backend/users', compact('users'));
    }

    // fungsi VIEW page tambah
    public function tambah (User $users, Kategori $kategori) {

        $kategori = Kategori::all();
        return view('backend/user/tambah', compact('users','kategori'));
    }

    // fungsi INSERT data
    public function create(request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        
        User::create($request->all());
        return redirect('backend/user')->with('success', 'users berhasil disimpan');
    }

    // fungsi DELETE data
    public function destroy (User $users){
        $users->delete();

        // return redirect untuk mengarahkan ketika button di klik
        return redirect()->route('user')->with('delete', 'users telah di gusur'); 
    }

    // fungsi menampilkan page edit
    public function edit(User $users, Kategori $kategori) {

        $kategori = Kategori::all();
        return view('backend/user/edit', compact('users','kategori'));
    }

    // fungsi UPDATE data
    public function update(Request $request, User $users){
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'paassword' => 'required',
        ]);

        $users->update($request->all());
        return redirect()->route('user')->with('success', 'users telah di perbarui');
    }
    



}
