<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLuotChoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luotchoi', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('nguoi_choi_id')->unsign();
            $table->Integer('so_cau');
            $table->string('diem');
            $table->string('ngay_gio');
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
        Schema::dropIfExists('luotchoi');
    }
}
