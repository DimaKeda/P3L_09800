<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bahan')->insert([
            [
                'nama' => 'Beef Short Plate',
                'serving_size' => '50',
                'unit' => 'gr',
                'remaining_stock' => '5000',
                'id_menu' => '1'
            ],
            [
                'nama' => 'Chicken Slice',
                'serving_size' => '50',
                'unit' => 'gr',
                'remaining_stock' => '5000',
                'id_menu' => '2'
            ], 
            [
                'nama' => 'Squid',
                'serving_size' => '25',
                'unit' => 'gr',
                'remaining_stock' => '5000',
                'id_menu' => '3'
            ],
            [
                'nama' => 'Tenderloin',
                'serving_size' => '50',
                'unit' => 'gr',
                'remaining_stock' => '5000',
                'id_menu' => '4'
            ],
            [
                'nama' => 'Rice',
                'serving_size' => '125',
                'unit' => 'gr',
                'remaining_stock' => '5000',
                'id_menu' => '5'
            ],
            [
                'nama' => 'Kimchi',
                'serving_size' => '15',
                'unit' => 'gr',
                'remaining_stock' => '5000',
                'id_menu' => '6'
            ],
            [
                'nama' => 'Saos',
                'serving_size' => '50',
                'unit' => 'ml',
                'remaining_stock' => '5000',
                'id_menu' => '7'
            ],
            [
                'nama' => 'Ocha',
                'serving_size' => '200',
                'unit' => 'ml',
                'remaining_stock' => '5000',
                'id_menu' => '8'
            ],
            [
                'nama' => 'Mineral Water',
                'serving_size' => '600',
                'unit' => 'ml',
                'remaining_stock' => '5000',
                'id_menu' => '9'
            ],
            [
                'nama' => 'Orange Juice',
                'serving_size' => '200',
                'unit' => 'ml',
                'remaining_stock' => '5000',
                'id_menu' => '10'
            ],

        ]);
    }
}
