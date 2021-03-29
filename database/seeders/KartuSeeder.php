<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KartuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kartu')->insert([
            [
                'id' => '4987123080002161',
                'tipe_kartu' => 'Credit',
                'nama_pemilik' => 'Dima Keda',
                'expired' => '2025-05-05',                
            ],
            [
                'id' => '1234567890123456',
                'tipe_kartu' => 'Debit',
                'nama_pemilik' => null,
                'expired' => null
            ]
        ]);
    }
}
