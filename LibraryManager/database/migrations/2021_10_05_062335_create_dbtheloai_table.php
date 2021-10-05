<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbtheloaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dbtheloai', function (Blueprint $table) {
            $table->increments('id_theloai');
            $table->string('tentheloai')->unique();
            $table->unsignedInteger('id_Ktheloai');
            $table->foreign('id_Ktheloai')->references('id_sach')->on('dbsach');
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
        Schema::dropIfExists('dbtheloai');
    }
}
