<?php

namespace App\Models;

use App\Models\Chat;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasRoles;
    use HasFactory;
    use Notifiable;
    use HasApiTokens;
    use HasProfilePhoto;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Users Shop
     */
    public function shop() {
        return $this->hasOne(Shop::class, 'owner_id');
    }

    /**
     * Users appointments
     */
    public function appointments() {
        return $this->hasMany(Appointment::class);
    }

    /**
     * Chats where user is sender
     */
    public function chatsSender() {
        return $this->hasMany(Chat::class, 'sender_user_id');
    }

    /**
     * Chats where user is recipient
     */
    public function chatsRecipient() {
        return $this->hasMany(Chat::class, 'recipient_user_id');
    }
}
