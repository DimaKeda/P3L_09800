<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();

        Schema::create('stock_masuk', function (Blueprint $table) {
            $table->id();
            $table->timestamp('tanggal_masuk')->nullable();
            $table->integer('kuantiti');
            $table->double('harga_beli');
            $table->tinyInteger('aktif')->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->foreignId('id_bahan')->constrained('bahan');
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
        Schema::dropIfExists('stock_masuk');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
