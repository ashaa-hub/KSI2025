<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class KoneksiController extends Controller
{
    public function test()
    {
        try {
            DB::connection()->getPdo();
            return "Koneksi ke database berhasil!";
        } catch (\Exception $e) {
            return "Koneksi gagal: " . $e->getMessage();
        }
    }
}
