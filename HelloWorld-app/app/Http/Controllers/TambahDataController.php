<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TambahDataController extends Controller
{
    // Menampilkan form (version from KoneksiDatabase branch)
    public function form()
    {
        return view('tambah');
    }

    // Menampilkan form (version from TambahData branch - optional)
    public function index()
    {
        return view('tambahdata'); // Menampilkan form baru tambah data
    }

    public function store(Request $request)
    {
        DB::table('users')->insert([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        return "✅ Data berhasil ditambahkan!";
    }
}
