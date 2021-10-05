<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbTraSachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_tra_sach', function (Blueprint $table) {
            $table->increments('id_tra');
            $table->integer('id_sach')->unique();
            $table->boolean("datra");
            $table->dateTime('ngaytra');
            $table->unsignedInteger('id_Ktrasach');
            $table->foreign('id_Ktrasach')->references('id_sach')->on('dbsach');
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
        Schema::dropIfExists('db_tra_sach');
    }
}
