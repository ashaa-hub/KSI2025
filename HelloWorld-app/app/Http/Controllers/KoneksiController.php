<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class KoneksiController extends Controller
{
    public function index()
    {
        try {
            // Test koneksi
            DB::connection()->getPdo();
            
            // Ambil nama database yang sedang terkoneksi
            $dbName = DB::connection()->getDatabaseName();

            return "<h2 style='color: green;'>✅ Koneksi Database Berhasil!</h2>
                    <p>Terhubung ke database: <b>{$dbName}</b></p>";
        } catch (\Exception $e) {
            return "<h2 style='color: red;'>❌ Koneksi Database Gagal!</h2>
                    <p>Error: " . $e->getMessage() . "</p>";
        }
    }
}
