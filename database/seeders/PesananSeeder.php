<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pesanan')->insert([
            [
                'status_selesai' => 2,
                'total_item' => 2,
                'total_quantity' => 4,
                'id_reservasi' => 1
            ],
            [
                'status_selesai' => 1,
                'total_item' => 1,
                'total_quantity' => 3,
                'id_reservasi' => 2
            ],
            [
                'status_selesai' => 1,
                'total_item' => 2,
                'total_quantity' => 2,
                'id_reservasi' => 3
            ],
            [
                'status_selesai' => 1,
                'total_item' => 3,
                'total_quantity' => 3,
                'id_reservasi' => 4
            ],
            [
                'status_selesai' => 1,
                'total_item' => 1,
                'total_quantity' => 1,
                'id_reservasi' => 5
            ],
            [
                'status_selesai' => 1,
                'total_item' => 2,
                'total_quantity' => 2,
                'id_reservasi' => 6
            ]
        ]);
    }
}
