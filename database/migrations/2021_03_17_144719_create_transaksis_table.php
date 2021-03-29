<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pesanan')->constrained('pesanan');
            $table->foreignId('id_kasir')->constrained('pegawai');
            $table->double('total_main')->default(0);
            $table->double('total_side')->default(0);
            $table->double('total_minum')->default(0);
            $table->double('sub_total')->default(0);
            $table->string('nomor_kartu')->nullable();

            $table->foreign('nomor_kartu')->references('id')->on('kartu');

            $table->string('kode_edc')->nullable();
            $table->tinyInteger('lunas')->default(0);
            $table->tinyInteger('aktif')->default(1);
            $table->timestamp('created_at');
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
        Schema::dropIfExists('transaksi');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
