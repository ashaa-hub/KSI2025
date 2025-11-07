<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KoneksiController;
use App\Http\Controllers\TambahDataController;

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

// Route dari branch KoneksiDatabase
Route::get('/koneksi', [KoneksiController::class, 'index']);

// Route dari branch TambahData
Route::get('/tambah', [TambahDataController::class, 'form']);
Route::post('/tambah', [TambahDataController::class, 'store']);

// Extra route dari branch TambahData (jika ingin dipakai terpisah)
Route::get('/tambah-data', [TambahDataController::class, 'index']);
Route::post('/tambah-data', [TambahDataController::class, 'store']);
