<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $this->down();

        Schema::create('bahan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('serving_size');
            $table->string('unit');
            $table->integer('remaining_stock');
            $table->tinyInteger('aktif')->default(1);

            $table->foreignId('id_menu')->nullable()->constrained('menu');
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
        Schema::dropIfExists('bahan');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
