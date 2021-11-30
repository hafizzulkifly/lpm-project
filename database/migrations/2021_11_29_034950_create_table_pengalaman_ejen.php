<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePengalamanEjen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pengalaman_ejen', function (Blueprint $table) {
            $table->id();

            $table->string('jawatan')->nullable();
            $table->string('pengalaman')->nullable();
            $table->string('bidang')->nullable();
            
            $table->unsignedBigInteger('user_id'); ///dalam table ni ada user id
            $table->foreign('user_id')->references('id')->on('users'); //dalamtable ni ada foreign key reference kepada users

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
        Schema::dropIfExists('table_pengalaman_ejen');
    }
}
