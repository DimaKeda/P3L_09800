<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $this->down();

        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('description');
            $table->double('harga', 12, 2);
            $table->string('tipe');
            $table->string('gambar')->nullable();
            $table->string('unit');
            $table->tinyInteger('aktif')->default(1);
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
        Schema::dropIfExists('menu');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
    }
}
