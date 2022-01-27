<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function carMakes() {
        return DB::table('cars')->pluck('make')->unique();
    }

    public function carModels(Request $request) {
        $make = $request->input('make');

        return DB::table('cars')->where('make', $make)->get();
    }
}
