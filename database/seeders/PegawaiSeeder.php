<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert([
            [
                'nama' => 'Nana',
                'email' => 'nana@gmail.com',
                'password' => bcrypt('123456'),
                'jenis_kelamin' => 'wanita',
                'role' => 'owner'
            ],
            [
                'nama' => 'Boy',
                'email' => 'boy@gmail.com',
                'password' => bcrypt('123456'),
                'jenis_kelamin' => 'pria',
                'role' => 'manager'
            ],
            [
                'nama' => 'Siska',
                'email' => 'siska@gmail.com',
                'password' => bcrypt('123456'),
                'jenis_kelamin' => 'wanita',
                'role' => 'waiter'
            ],
            [
                'nama' => 'Dian',
                'email' => 'dian@gmail.com',
                'password' => bcrypt('123456'),
                'jenis_kelamin' => 'wanita',
                'role' => 'cashier'
            ],
            [
                'nama' => 'Juna',
                'email' => 'juna@gmail.com',
                'password' => bcrypt('123456'),
                'jenis_kelamin' => 'pria',
                'role' => 'chef'
            ],
        ]);
    }
}
