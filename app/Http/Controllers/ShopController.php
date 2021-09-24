<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as RequestTest;

class ShopController extends Controller
{
    public function fetch(Request $request) {
        return Shop::all();
    }

    public function update(Request $request, Shop $shop) {
        $data = $request->all();

        Validator::make($data, [
            'name' => 'required',
            'description' => 'max:255',
        ])->validate();

        $shop->forceFill([
            'name' => $data['name'],
            'description' => $data['description'],
        ])->save();

        return Redirect::route('edit-shop');
    }
}
