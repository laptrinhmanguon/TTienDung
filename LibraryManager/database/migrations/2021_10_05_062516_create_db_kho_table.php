<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbKhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_kho', function (Blueprint $table) {
            $table->integer('id_sach')->unique();
            $table->integer('soluong');
            $table->increments('id_kho');
            $table->unsignedInteger('id_Kkho');
            $table->foreign('id_Kkho')->references('id_sach')->on('dbsach');
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
        Schema::dropIfExists('db_kho');
    }
}
