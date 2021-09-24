<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ShopController extends Controller
{
    public function fetch(Request $request) {
        return Shop::all();
    }

    public function update(Request $request, Shop $shop) {
        $validatedData = $request->validateWithBag('updateShopInformation', [
            'name' => 'required',
            'description' => 'max:255',
        ]);

        $shop->forceFill([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
        ])->save();

        return Redirect::route('edit-shop');
    }
}
