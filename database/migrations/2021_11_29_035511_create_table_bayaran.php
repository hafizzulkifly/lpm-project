<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_bayaran', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('permohonan_id');
            $table->foreign('permohonan_id')->references('id')->on('table_permohonan');

            $table->unsignedBigInteger('kaedah_bayaran_id');
            $table->foreign('kaedah_bayaran_id')->references('id')->on('table_kaedah_bayaran');
            
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
        Schema::dropIfExists('table_bayaran');
    }
}
