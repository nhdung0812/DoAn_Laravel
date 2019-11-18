<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLichSuMuaCredit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichsumuacredit', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('nguoi_choi_id')->unsigned();
            $table->Integer('goi_credit_id')->unsigned();
            $table->Integer('credit');
            $table->Integer('so_tien');
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
        Schema::dropIfExists('lichsumuacredit');
    }
}
