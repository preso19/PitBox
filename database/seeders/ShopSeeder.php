<?php

namespace Database\Seeders;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop::factory([
            'owner_id' => 2,
            'name' => 'Mechanic One Shop'
        ])
        ->count(1)
        ->create();

        Shop::factory([
            'owner_id' => 3,
            'name' => 'Mechanic Two Shop'
        ])
        ->count(1)
        ->create();

        Shop::factory([
            'owner_id' => 1,
        ])
        ->count(20)
        ->create();
    }
}
