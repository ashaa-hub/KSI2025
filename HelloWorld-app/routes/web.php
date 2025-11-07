<?php

use App\Http\Controllers\TambahDataController;

Route::get('/tambah', [TambahDataController::class, 'form']);
Route::post('/tambah', [TambahDataController::class, 'store']);
Route::get('/tambah-data', [TambahDataController::class, 'index']);
Route::post('/tambah-data', [TambahDataController::class, 'store']);
