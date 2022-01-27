<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Inertia\Inertia;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Builder;

class PageRenderController extends Controller
{
    public function home() {
        return Inertia::render('Home', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'userRole' => Auth::user()->roles->pluck('name')->first(),
            'shops' => Shop::all(),
        ]);
    }

    public function myShop() {
        return Inertia::render('MyShop', [
            'userShop' => Auth::user()->shop,
            'userRole' => Auth::user()->roles->pluck('name')->first(),
        ]);
    }

    public function editShop() {
        return Inertia::render('EditShop', [
            'userShop' => Auth::user()->shop,
            'userRole' => Auth::user()->roles->pluck('name')->first(),
        ]);
    }

    public function appointments() {
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
    }
}
