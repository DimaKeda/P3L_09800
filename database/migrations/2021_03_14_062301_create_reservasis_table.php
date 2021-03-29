<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $this->down();

        Schema::create('reservasi', function (Blueprint $table) {
            $table->id();
            $table->string('waktu_sesi');
            $table->timestamp('waktu_mulai')->useCurrent();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('aktif')->default(1);
            $table->foreignId('nomor_meja')->constrained('meja');
            $table->foreignId('id_pegawai')->constrained('pegawai');
            $table->foreignId('id_customer')->constrained('customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('reservasi');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
