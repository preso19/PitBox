<?php

use Inertia\Inertia;
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
    Route::get('/', function () {
        return Inertia::render('Home', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'userRole' => Auth::user()->roles->pluck('name')->first(),
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
});
