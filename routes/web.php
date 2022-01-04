<?php

use App\Models\Shop;
use Inertia\Inertia;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Builder;

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

    /**
     * Chat routes
     */
    Route::patch('/chat/{chat}/', 'ChatController@update')->name('chat.update');

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
            'userShop' => Auth::user()->shop,
            'userRole' => Auth::user()->roles->pluck('name')->first(),
        ]);
    })->name('my-shop');

    Route::get('/edit-shop', function () {
        return Inertia::render('EditShop', [
            'userShop' => Auth::user()->shop,
            'userRole' => Auth::user()->roles->pluck('name')->first(),
        ]);
    })->name('edit-shop');

    Route::get('/appointments', function () {
        $user = Auth::user();
        $userRole = $user->roles->pluck('name')->first();

        if ($userRole === 'client') {
            $userAppointments = $user->appointments()->with(['shop', 'chat', 'chat.messages'])->get();
        } else {
            $userAppointments = Appointment::whereHas('shop', function(Builder $query) use ($user) {
                $query->where('id', '=', $user->shop->id);
            })->with(['shop', 'chat', 'chat.messages'])->get();
        }

        return Inertia::render('Appointments', [
            'userAppointments' => $userAppointments,
            'newAppointment' => request('new') ? true : false,
            'newAppointmentShop' => Shop::find(request('shop')),
            'userRole' => $userRole,
        ]);
    })->name('appointments');
});
