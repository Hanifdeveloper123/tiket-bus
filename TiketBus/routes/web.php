<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\TrayekController;
use App\Models\Trayek;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('layout.main');
// });


Route::controller(AuthController::class)->group(function (){
    Route::get('/','login')->name('login');
    Route::post('do_login','do_login')->name('do_login');

    Route::get('login_admin', 'login_admin')->name('login_admin');
    Route::post('do_login_admin', 'do_login_admin')->name('do_login_admin');

    Route::get('register','register')->name('register');
    Route::post('do_register','do_register')->name('do_register');

    Route::post('logout','logout')->name('logout');
});

Route::resource('trayek', TrayekController::class);

Route::resource('pelanggan', PelangganController::class);

Route::resource('bus', BusController::class);

Route::resource('tiket',TiketController::class);

Route::get('jumlah/{id}', [TiketController::class, 'jumlah'])->name('jumlah');

Route::post('pesan/{id}', [TiketController::class, 'pesan'])->name('pesan');

