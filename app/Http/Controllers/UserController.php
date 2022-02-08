<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function updateCars(Request $request) {
        $data = $request->all();

        $user = $request->user();

        $user->cars = json_encode($data);
        $user->save();
    }
}
