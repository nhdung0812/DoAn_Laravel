<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCauHinhTroGiup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cauhinhtrogiup', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('loai_tro-giup');
            $table->Integer('thu_tu');
            $table->Integer('credit');
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
        Schema::dropIfExists('cauhinhtrogiup');
    }
}
