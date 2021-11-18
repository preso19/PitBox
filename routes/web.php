<?php

use Inertia\Inertia;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    /**
     * Shop routes
     */
    Route::post('/shop', 'ShopController@create')->name('create.shop');
    Route::put('/shop/{shop}', 'ShopController@update')->name('update.shop');
    Route::put('/shop/{shop}/location', 'ShopController@updateLocation')->name('update.shop.location');

    /**
     * Appoitment routes
     */
    Route::post('/appointment', 'AppointmentController@create')->name('create.appointment');

    Route::get('/', function () {
        return Inertia::render('Home', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'userRole' => Auth::user()->roles->pluck('name')->first(),
            'shops' => Shop::all(),
        ]);
    })->name('home');

    Route::get('/my-shop', function () {
        return Inertia::render('MyShop', [
            'userShop' => Auth::user()->shop
        ]);
    })->name('my-shop');

    Route::get('/edit-shop', function () {
        return Inertia::render('EditShop', [
            'userShop' => Auth::user()->shop
        ]);
    })->name('edit-shop');

    Route::get('/appointments', function () {
        return Inertia::render('Appointments', [
            'userAppointments' => Auth::user()->appointments()->with(['shop', 'chat', 'chat.messages'])->get(),
            'newAppointment' => request('new') ? true : false,
            'newAppointmentShop' => Shop::find(request('shop')),
        ]);
    })->name('appointments');
});
