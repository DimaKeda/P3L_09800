<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryBahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();
        Schema::create('history_bahan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_bahan')->constrained('bahan');
            $table->integer('kuantiti');
            $table->tinyInteger('kategori');
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
        Schema::dropIfExists('history_bahan');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
