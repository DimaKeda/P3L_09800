<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            [
                'nama' => 'Beef Short Plate',
                'description' => 'Potongan daging sapi dari bagian otot perut, bentuknya panjang dan datar',
                'harga' => 20000,
                'tipe' => 'main dish',
                'unit' => 'plate'
            ],
            [
                'nama' => 'Chicken Slice',
                'description' => 'Potongan daging dari bagian dada ayam',
                'harga' => 15000,
                'tipe' => 'main dish',
                'unit' => 'plate'
            ],
            [
                'nama' => 'Squid',
                'description' => 'Potongan daging cumi',
                'harga' => 20000,
                'tipe' => 'main dish',
                'unit' => 'plate'
            ],
            [
                'nama' => 'Tenderloin',
                'description' => 'Potongan daging sapi yang paling empuk sejagad raya',
                'harga' => 22000,
                'tipe' => 'main dish',
                'unit' => 'plate'
            ],
            [
                'nama' => 'Rice',
                'description' => 'Satu mangkok nasi putih dihidangkan hangat',
                'harga' => 4000,
                'tipe' => 'main dish',
                'unit' => 'bowl'
            ],
            [
                'nama' => 'Kimchi',
                'description' => 'Asinan sayur hasil fermentasi yang diberi bumbu pedas',
                'harga' => 5000,
                'tipe' => 'side dish',
                'unit' => 'plate'
            ],
            [
                'nama' => 'Saos',
                'description' => 'Saos signature yang melengkapi kelezatan makanan',
                'harga' => 0,
                'tipe' => 'side dish',
                'unit' => 'mini bowl'
            ],
            [
                'nama' => 'Ocha',
                'description' => 'Minuman teh hijau segar',
                'harga' => 3000,
                'tipe' => 'minuman',
                'unit' => 'glass'
            ],
            [
                'nama' => 'Mineral Water 600 ml',
                'description' => 'Minuman air segar dari pegunungan ternama',
                'harga' => 6000,
                'tipe' => 'minuman',
                'unit' => 'botol'
            ],
            [
                'nama' => 'Orange Juice',
                'description' => 'Minuman jus jeruk yang didapat dari buah asli',
                'harga' => 8000,
                'tipe' => 'minuman',
                'unit' => 'gelas'
            ],

        ]);
    }
}
