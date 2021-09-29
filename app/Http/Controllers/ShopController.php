<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{
    public function create(Request $request, Shop $shop) {
        $shop = Shop::create([
            'name' => 'Temporary Shop Name',
            'description' => 'Temporary Shop Description',
        ]);

        $shop->owner()->associate(Auth::user());
        $shop->save();

        return Redirect::route('edit-shop');
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

    public function updateLocation(Request $request, Shop $shop) {
        $data = $request->all();

        Validator::make($data, [
            'lat' => 'required',
            'lng' => 'required',
        ])->validate();

        $shop->forceFill([
            'lat' => $data['lat'],
            'lng' => $data['lng'],
        ])->save();

        return Redirect::route('edit-shop');
    }
}
