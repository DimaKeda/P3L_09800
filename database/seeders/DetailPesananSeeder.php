<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DetailPesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_pesanan')->insert([
            //pesanan 1
            [
                'id_pesanan' => 1,
                'id_menu' => 1,
                'kuantiti' => 2,
                'status' => 2,
            ],
            [
                'id_pesanan' => 1,
                'id_menu' => 2,
                'kuantiti' => 2,
                'status' => 2,
            ],
            //pesanan 2
            [
                'id_pesanan' => 2,
                'id_menu' => 2,
                'kuantiti' => 3,
                'status' => 2,
            ],
            //pesanan 3
            [
                'id_pesanan' => 3,
                'id_menu' => 2,
                'kuantiti' => 1,
                'status' => 2,
            ],
            [
                'id_pesanan' => 3,
                'id_menu' => 5,
                'kuantiti' => 1,
                'status' => 2,
            ],
            // pesanan 4
            [
                'id_pesanan' => 4,
                'id_menu' => 4,
                'kuantiti' => 1,
                'status' => 2,
            ],
            [
                'id_pesanan' => 4,
                'id_menu' => 5,
                'kuantiti' => 1,
                'status' => 2,
            ],
            [
                'id_pesanan' => 4,
                'id_menu' => 6,
                'kuantiti' => 1,
                'status' => 2,
            ],
            // pesanan 5
            [
                'id_pesanan' => 5,
                'id_menu' => 8,
                'kuantiti' => 1,
                'status' => 2,
            ],
            // pesanan 6
            [
                'id_pesanan' => 6,
                'id_menu' => 6,
                'kuantiti' => 1,
                'status' => 2,
            ],
            [
                'id_pesanan' => 6,
                'id_menu' => 10,
                'kuantiti' => 1,
                'status' => 2,
            ],
        ]);
    }
}
