<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\PemesanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('backend')->group(function () {

Route::get('/',
    [BackendController::class, 'index']);

Route::get('/kategori',
    [KategoriController::class, 'kategori']);

Route::get('/lapangan',
    [LapanganController::class, 'lapangan']);

Route::get('bookings',
    [BookingsController::class, 'bookings']);

Route::get('/pemesan',
    [PemesanController::class, 'pemesan']);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
