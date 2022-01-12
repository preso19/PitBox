<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@pitstop.com',
            'password' => Hash::make('demo'),
        ]);

        $user->assignRole('admin');

        $user = User::factory()->create([
            'name' => 'Mechanic One',
            'email' => 'mechanicOne@pitstop.com',
            'password' => Hash::make('demo'),
        ]);

        $user->assignRole('mechanic');

        $user = User::factory()->create([
            'name' => 'Mechanic Two',
            'email' => 'mechanicTwo@pitstop.com',
            'password' => Hash::make('demo'),
        ]);

        $user->assignRole('mechanic');

        $user = User::factory()->create([
            'name' => 'Client',
            'email' => 'client@pitstop.com',
            'password' => Hash::make('demo'),
        ]);

        $user->assignRole('client');
    }
}
