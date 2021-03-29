<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call([
           PegawaiSeeder::class,
           CustomerSeeder::class,
           MejaSeeder::class,
           ReservasiSeeder::class,
           MenuSeeder::class,
           BahanSeeder::class,
           KartuSeeder::class,
           StockMasukSeeder::class,
           HistoryBahanSeeder::class,
           PesananSeeder::class,
           DetailPesananSeeder::class,
           TransaksiSeeder::class
       ]);
    }
}
