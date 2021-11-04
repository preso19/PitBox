<?php

namespace App\StateMachines;

use Asantibanez\LaravelEloquentStateMachines\StateMachines\StateMachine;

class AppointmentStateMachine extends StateMachine
{
    public function recordHistory(): bool
    {
        return false;
    }

    public function transitions(): array
    {
        return [
            'created' => ['requestedByClient', 'requestedByMechanic', 'approved', 'finished'],
            'requestedByClient' => ['requestedByMechanic', 'approved', 'finished'],
            'requestedByMechanic' => ['approved', 'finished'],
            'approved' => ['finished']
        ];
    }

    public function defaultState(): ?string
    {
        return 'created';
    }
}
