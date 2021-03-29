<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class HistoryBahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('History_Bahan')->insert([
            //pesanan 1
            [
                'id_bahan' => 1,
                'kuantiti' => 100,
                'kategori' => 2,
            ],
            [
                'id_bahan' => 2,
                'kuantiti' => 100,
                'kategori' => 2,
            ],
            // pesanan 2
            [
                'id_bahan' => 2,
                'kuantiti' => 150,
                'kategori' => 2,
            ],
            //pesanan 3
            [
                'id_bahan' => 2,
                'kuantiti' => 50,
                'kategori' => 2,
            ],
            [
                'id_bahan' => 5,
                'kuantiti' => 125,
                'kategori' => 2,
            ],
            // pesanan 4
            [
                'id_bahan' => 4,
                'kuantiti' => 50,
                'kategori' => 2,
            ],
            [
                'id_bahan' => 5,
                'kuantiti' => 125,
                'kategori' => 2,
            ],
            [
                'id_bahan' => 6,
                'kuantiti' => 15,
                'kategori' => 2,
            ],
            // pesanan 5
            [
                'id_bahan' => 8,
                'kuantiti' => 200,
                'kategori' => 2,
            ],
            // pesanan 6
            [
                'id_bahan' => 6,
                'kuantiti' => 15,
                'kategori' => 2,
            ],
            [
                'id_bahan' => 10,
                'kuantiti' => 200,
                'kategori' => 2,
            ],
        ]);
    }
}
