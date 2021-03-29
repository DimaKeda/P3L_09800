<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

use Carbon\Carbon;

class StockMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stock_masuk')->insert([
            [
                'tanggal_masuk' => Carbon::now(),
                'kuantiti' => 5000,
                'harga_beli' => 10_000,
                'id_bahan' => 1,
            ],
            [
                'tanggal_masuk' => Carbon::now(),
                'kuantiti' => 5000,
                'harga_beli' => 10_000,
                'id_bahan' => 2,
            ],
            [
                'tanggal_masuk' => Carbon::now(),
                'kuantiti' => 5000,
                'harga_beli' => 10_000,
                'id_bahan' => 3,
            ],
            [
                'tanggal_masuk' => Carbon::now(),
                'kuantiti' => 5000,
                'harga_beli' => 10_000,
                'id_bahan' => 4,
            ],
            [
                'tanggal_masuk' => Carbon::now(),
                'kuantiti' => 5000,
                'harga_beli' => 10_000,
                'id_bahan' => 5,
            ],
            [
                'tanggal_masuk' => Carbon::now(),
                'kuantiti' => 5000,
                'harga_beli' => 10_000,
                'id_bahan' => 6,
            ],
            [
                'tanggal_masuk' => Carbon::now(),
                'kuantiti' => 5000,
                'harga_beli' => 10_000,
                'id_bahan' => 7,
            ],
            [
                'tanggal_masuk' => Carbon::now(),
                'kuantiti' => 5000,
                'harga_beli' => 10_000,
                'id_bahan' => 8,
            ],
            [
                'tanggal_masuk' => Carbon::now(),
                'kuantiti' => 5000,
                'harga_beli' => 10_000,
                'id_bahan' => 9,
            ],
            [
                'tanggal_masuk' => Carbon::now(),
                'kuantiti' => 5000,
                'harga_beli' => 10_000,
                'id_bahan' => 10,
            ]
        ]);
    }
}
