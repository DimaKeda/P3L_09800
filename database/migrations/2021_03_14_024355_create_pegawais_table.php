<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $this->down();

        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("password");
            $table->string("email");
            $table->string("jenis_kelamin");
            $table->string("role");
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
        Schema::dropIfExists('pegawai');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
