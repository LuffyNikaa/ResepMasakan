<?php

namespace App\Http\Controllers;

use App\Models\resep;
use App\Models\tbl_masakan;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    //
    public function index()
    {
        $model_m = new tbl_masakan();
        $resep = $model_m::all();
        return view('resep', ['resep' => $resep]);
    }
}
