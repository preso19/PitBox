<?php

namespace App\Models;

use App\Models\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chat extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function chats() {
        return $this->hasMany(Message::class);
    }
}
