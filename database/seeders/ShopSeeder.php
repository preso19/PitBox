<?php

namespace Database\Seeders;

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
        DB::table('shops')->insert(
            [
                'name' => 'Shop 1',
                'address' => 'Street 123',
                'description' => 'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla quis lorem ut libero malesuada feugiat. Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla quis lorem ut libero malesuada feugiat.',
                'lat' => '43.215993',
                'lng' => '27.933329'
            ]
        );

        DB::table('shops')->insert(
            [
                'name' => 'Shop 2',
                'address' => 'Street 234',
                'description' => 'Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada.',
                'lat' => '43.219655',
                'lng' => '27.928366'
            ]
        );

        DB::table('shops')->insert(
            [
                'name' => 'Na bat ivan serviza',
                'address' => 'Street 345',
                'description' => 'My amazing third shop.',
                'lat' => '43.219405',
                'lng' => '27.942550'
            ]
        );
    }
}
