<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbNhaXuatbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_nha_xuatban', function (Blueprint $table) {
            $table->increments('id_nhaxuatban')->unique();
            $table->string('tennhaxuatban')->unique();
            $table->unsignedInteger('id_Knhaxuatban');
            $table->foreign('id_Knhaxuatban')->references('id_sach')->on('dbsach');
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
        Schema::dropIfExists('db_nha_xuatban');
    }
}
