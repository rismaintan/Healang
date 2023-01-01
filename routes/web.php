<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PengaduanController;

/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// tampilkan data barang
Route::get('/home', [UserController::class, 'index']);

// menampilkan halaman pengaduan baru
Route::get('/complaint', [UserController::class, 'create']);

// memasukkan data pengaduan baru
Route::post('/complaint/create', [UserController::class, 'store']);