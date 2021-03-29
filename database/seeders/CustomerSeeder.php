<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            [
                'nama' => 'Agus',
                'email' => 'Agus@gmail.com',
                'telepon' => '08123456789'
            ],
            [
                'nama' => 'Anton',
                'email' => 'Anton@gmail.com',
                'telepon' => '08123456781'
            ],
            [
                'nama' => 'Doni',
                'email' => 'Doni@gmail.com',
                'telepon' => '08123456782'
            ],
            [
                'nama' => 'Tono',
                'email' => 'Tono@gmail.com',
                'telepon' => '08123456783'
            ],
            [
                'nama' => 'Toni',
                'email' => 'Toni@gmail.com',
                'telepon' => '08123456784'
            ],
            [
                'nama' => '09800_DimaKeda',
                'email' => '180709800@students.uajy.ac.id',
                'telepon' => '081234567821'
            ]
        ]);
    }
}
