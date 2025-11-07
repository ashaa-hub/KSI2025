<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TambahDataController extends Controller
{
    public function form()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return "✅ Data berhasil ditambahkan!";
    }
}
