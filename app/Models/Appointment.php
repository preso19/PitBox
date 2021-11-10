<?php

namespace App\Models;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use App\StateMachines\AppointmentStateMachine;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Asantibanez\LaravelEloquentStateMachines\Traits\HasStateMachines;


class Appointment extends Model
{
    use HasFactory;
    use HasStateMachines;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'start',
        'end',
        'duration',
        'duration_type',
        'state',
        'subject',
        'details',
        'car',
        'datetime',
    ];

    /**
     * The model's state machines
     *
     * @var array
     */
    public $stateMachines = [
        'state' => AppointmentStateMachine::class
    ];

    /**
     * The shop that the appointments belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shop() {
        return $this->belongsTo(Shop::class);
    }

    /**
     * The user that the created the appointment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}
