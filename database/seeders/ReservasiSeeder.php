<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReservasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservasi')->insert([
            [
                'waktu_mulai' => '2021-01-01 18:00:00',
                'waktu_sesi' => 'dinner',
                'status' => '2',
                'id_pegawai' => '3',
                'nomor_meja' => '1',
                'id_customer' => '1'
            ],
            [
                'waktu_mulai' => '2021-02-02 13:00:00',
                'waktu_sesi' => 'lunch',
                'status' => '2',
                'id_pegawai' => '4',
                'nomor_meja' => '1',
                'id_customer' => '2'
            ],
            [
                'waktu_mulai' => Carbon::now(),
                'waktu_sesi' => $this->getWaktuSesi(Carbon::now()),
                'status' => '1',
                'id_pegawai' => '4',
                'nomor_meja' => '2',
                'id_customer' => '3'
            ],
            [
                'waktu_mulai' => Carbon::now(),
                'waktu_sesi' => $this->getWaktuSesi(Carbon::now()),
                'status' => '1',
                'id_pegawai' => '4',
                'nomor_meja' => '3',
                'id_customer' => '4'
            ],
            [
                'waktu_mulai' => Carbon::now(),
                'waktu_sesi' => $this->getWaktuSesi(Carbon::now()),
                'status' => '1',
                'id_pegawai' => '4',
                'nomor_meja' => '4',
                'id_customer' => '5'
            ],
            [
                'waktu_mulai' => Carbon::now(),
                'waktu_sesi' => $this->getWaktuSesi(Carbon::now()),
                'status' => '1',
                'id_pegawai' => '4',
                'nomor_meja' => '5',
                'id_customer' => '6'
            ]
        ]);
    }

    private function getWaktuSesi($curr) 
    {
        $clock = explode(" ", $curr)[1];

        $hour = (int) $clock[0] . $clock[1];
      
        if($hour >=17 && $hour <= 21)
            return  "dinner";
        
        return "lunch";
    }

}
