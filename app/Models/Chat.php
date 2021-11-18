<?php

namespace App\Models;

use App\Models\Message;
use App\Models\Appointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chat extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function appointment() {
        return $this->belongsTo(Appointment::class);
    }

    public function messages() {
        return $this->hasMany(Message::class);
    }
}
