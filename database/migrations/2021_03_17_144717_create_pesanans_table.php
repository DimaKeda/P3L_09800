<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $this->down();

        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('status_selesai')->default(1);
            $table->integer('total_item')->default(0);
            $table->integer('total_quantity')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->foreignId('id_reservasi')->constrained('reservasi');
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
        Schema::dropIfExists('pesanan');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');     
    }
}
