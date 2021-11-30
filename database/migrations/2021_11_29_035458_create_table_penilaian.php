<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePenilaian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_penilaian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mesyuarat_id');
            $table->foreign('mesyuarat_id')->references('id')->on('table_mesyuarat');

            $table->string('tarikh_mesyuarat')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_penilaian');
    }
}
