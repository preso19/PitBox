<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    public function create(Request $request) {
        $data = $request->all();

        Validator::make($data, [
            'subject' => 'required',
            'datetime' => 'required',
            'car' => 'required',
            'details' => 'required|max:255',
            'shopId' => 'required',
        ])->validate();

        $appointment = Appointment::create([
            'subject' => $data['subject'],
            'datetime' => date('Y-m-d h:i:s', strtotime($data['datetime'])),
            'car' => json_encode($data['car']),
            'details' => $data['details'],
        ]);

        $appointment->shop()->associate($data['shopId']);
        $appointment->user()->associate(Auth::user());
        $appointment->save();

        $chat = Chat::create();

        $chat->appointment()->associate($appointment);
        $chat->save();

        return Redirect::route('appointments');
    }
}
