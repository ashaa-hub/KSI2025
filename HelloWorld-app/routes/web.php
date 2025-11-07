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

Route::get('/koneksi', [KoneksiController::class, 'index']);
Route::get('/tambah', [TambahDataController::class, 'form']);
Route::post('/tambah', [TambahDataController::class, 'store']);