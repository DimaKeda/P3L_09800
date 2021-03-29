<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKartusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();

        Schema::create('kartu', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('tipe_kartu');
            $table->string('nama_pemilik')->nullable();
            $table->date('expired')->nullable();
            $table->tinyInteger('aktif')->default(1);
            $table->timestamp('created_at')->useCurrent();
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
        Schema::dropIfExists('kartu');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
       
    }
}
