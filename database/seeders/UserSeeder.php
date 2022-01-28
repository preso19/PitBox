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
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@pitstop.com',
            'password' => Hash::make('demo'),
        ])->assignRole('admin');

        User::factory()->create([
            'name' => 'Mechanic One',
            'email' => 'mechanicOne@pitstop.com',
            'password' => Hash::make('demo'),
        ])->assignRole('mechanic');

        User::factory()->create([
            'name' => 'Mechanic Two',
            'email' => 'mechanicTwo@pitstop.com',
            'password' => Hash::make('demo'),
        ])->assignRole('mechanic');

        User::factory()->create([
            'name' => 'ClientOne',
            'email' => 'clientOne@pitstop.com',
            'password' => Hash::make('demo'),
        ])->assignRole('client');

        User::factory()->create([
            'name' => 'ClientTwo',
            'email' => 'clientTwo@pitstop.com',
            'password' => Hash::make('demo'),
        ])->assignRole('client');
    }
}
