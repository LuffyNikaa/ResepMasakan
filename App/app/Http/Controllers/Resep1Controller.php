<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resep1;
use App\Models\tbl_masakan;


class Resep1Controller extends Controller
{
    public function showDetail($judul)
    {
        $resep = resep1::find($judul); // Mengambil data menu berdasarkan ID
        return view('resep1', compact('resep'));
    }
}
