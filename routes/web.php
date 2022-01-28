<?php

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

    /**
     * Profile routes
     */
    Route::get('/car/makes', 'CarController@carMakes')->name('car.makes');
    Route::get('/car/models', 'CarController@carModels')->name('car.models');
    Route::put('/user/cars', 'UserController@updateCars')->name('user.cars');

    /**
     * Chat routes
     */
    Route::patch('/chat/{chat}/', 'ChatController@update')->name('chat.update');

    /**
     * Page Rendering
     */
    Route::get('/', 'PageRenderController@home')->name('home');
    Route::get('/my-shop', 'PageRenderController@myShop')->name('my-shop');
    Route::get('/edit-shop', 'PageRenderController@editShop')->name('edit-shop');
    Route::get('/appointments', 'PageRenderController@appointments')->name('appointments');
});
