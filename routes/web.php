<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\UsersController;


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

Route::get('about', function () {
    return view('about');
});

Route::prefix('backend')->group(function () {

Route::get('/',
    [BackendController::class, 'index']);

Route::get('kategori',       
    [KategoriController::class, 'kategori'])->name('kategori');

Route::get('lapangan',
    [LapanganController::class, 'lapangan'])->name('lapangan');

Route::get('bookings',
    [BookingsController::class, 'bookings'])->name('booking');

Route::get('user',
    [UsersController::class, 'users'])->name('user');

// Membuat grup user
Route::prefix('users') ->group(function () {
    Route::get('tambah',        [UsersController::class, 'tambah'])  ->name ('users.tambah');
    Route::post('create',       [UsersController::class, 'create'])  ->name ('users.create');
    Route::get('{users}',       [UsersController::class, 'edit'])    ->name ('users.edit');
    Route::delete('{users}',    [UsersController::class, 'destroy']) ->name ('users.destroy');
    Route::put('{users}',       [UsersController::class, 'update'])  ->name ('users.update');
});

// Membuat grup kategori
Route::prefix('kategori') ->group(function () {
    Route::get('tambah',           [KategoriController::class, 'tambah'])  ->name ('kategori.tambah');
    Route::post('create',          [KategoriController::class, 'create'])  ->name ('kategori.create');
    Route::get('{kategori}',       [KategoriController::class, 'edit'])    ->name ('kategori.edit');
    Route::delete('{kategori}',    [KategoriController::class, 'destroy']) ->name ('kategori.destroy');
    Route::put('{kategori}',       [KategoriController::class, 'update'])  ->name ('kategori.update');
});

// Membuat grup lapangan
Route::prefix('lapangan') ->group(function () {
    Route::get('tambah',           [LapanganController::class, 'tambah'])  ->name ('lapangan.tambah');
    Route::post('create',          [LapanganController::class, 'create'])  ->name ('lapangan.create');
    Route::get('{lapangan}',       [LapanganController::class, 'edit'])    ->name ('lapangan.edit');
    Route::delete('{lapangan}',    [LapanganController::class, 'destroy']) ->name ('lapangan.destroy');
    Route::put('{lapangan}',       [LapanganController::class, 'update'])  ->name ('lapangan.update');
});


// Membuat grup user
Route::prefix('bookings') ->group(function () {
    Route::get('tambah',           [BookingsController::class, 'tambah'])  ->name ('bookings.tambah');
    Route::post('create',          [BookingsController::class, 'create'])  ->name ('bookings.create');
    Route::get('{bookings}',       [BookingsController::class, 'edit'])    ->name ('bookings.edit');
    Route::delete('{bookings}',    [BookingsController::class, 'destroy']) ->name ('bookings.destroy');
    Route::put('{bookings}',       [BookingsController::class, 'update'])  ->name ('bookings.update');
});

// Route::resource('/lapangan',    LapanganController::class);
// Route::resource('/bookings',    BookingsController::class);
// Route::resource('user',         UsersController::class);



});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
