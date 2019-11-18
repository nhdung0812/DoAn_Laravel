<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableChiTietLuotChoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietluotchoi', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('luot_choi_id')->unsigned();
            $table->Integer('cau_hoi_id');
            $table->string('phuong_an');
            $table->Integer('diem');
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
        Schema::dropIfExists('chitietluotchoi');
    }
}
