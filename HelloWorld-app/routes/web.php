<?php

use App\Http\Controllers\TambahDataController;

Route::get('/tambah', [TambahDataController::class, 'form']);
Route::post('/tambah', [TambahDataController::class, 'store']);

