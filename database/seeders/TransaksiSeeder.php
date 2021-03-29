<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaksi')->insert([
            [
                'id_pesanan' => 1,
                'id_kasir' => 4,
                'total_main' => 70000,
                'total_side' => 0,
                'total_minum' => 0,
                'sub_total' => 70000,
                'nomor_kartu' => null,
                'kode_edc' => null,
                'lunas' => 1
            ],
            [
                'id_pesanan' => 2,
                'id_kasir' => 4,
                'total_main' => 45000,
                'total_side' => 0,
                'total_minum' => 0,
                'sub_total' => 45000,
                'nomor_kartu' => null,
                'kode_edc' => null,
                'lunas' => 1
            ],
            [
                'id_pesanan' => 3,
                'id_kasir' => 4,
                'total_main' => 19000,
                'total_side' => 0,
                'total_minum' => 0,
                'sub_total' => 19000,
                'nomor_kartu' => null,
                'kode_edc' => null,
                'lunas' => 1
            ],
            [
                'id_pesanan' => 4,
                'id_kasir' => 4,
                'total_main' => 26000,
                'total_side' => 5000,
                'total_minum' => 0,
                'sub_total' => 31000,
                'nomor_kartu' => null,
                'kode_edc' => null,
                'lunas' => 1
            ],
            [
                'id_pesanan' => 5,
                'id_kasir' => 4,
                'total_main' => 0,
                'total_side' => 0,
                'total_minum' => 3000,
                'sub_total' => 3000,
                'nomor_kartu' => '1234567890123456',
                'kode_edc' => '654321',
                'lunas' => 1
            ],
            [
                'id_pesanan' => 6,
                'id_kasir' => 4,
                'total_main' => 0,
                'total_side' => 5000,
                'total_minum' => 8000,
                'sub_total' => 13000,
                'nomor_kartu' => '4987123080002161',
                'kode_edc' => '123456',
                'lunas' => 1
            ],
            
        ]);
    }
}
