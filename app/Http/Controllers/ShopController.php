<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use App\Http\Requests\ShopUpdateRequest;

class ShopController extends Controller
{
    public function fetch(Request $request) {
        return Shop::all();
    }

    public function update(ShopUpdateRequest $request, Shop $shop) {
        $validated = $request->validated();

        $shop->update([
            'name' => $validated['name'],
            'description' => $validated['description']
        ]);

        return response('Success!', 200);
    }
}
