<?php

namespace App\Models;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body'
    ];

    public function chat() {
        return $this->belongsTo(Chat::class);
    }

    public function sender() {
        return $this->belongsTo(User::class, 'sender_user_id');
    }

    public function recipient() {
        return $this->belongsTo(User::class, 'recipient_user_id');
    }
}
