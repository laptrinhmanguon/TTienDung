<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbsachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sach', function (Blueprint $table) {
            $table->id();
            $table->string('tensach')->unique();
            $table->string('tacgia');
            $table-> string('masach');
//          $table->string('id_theloai');
            $table->string('theloai');
//          $table-> string('id_nhaxuatban');
            $table->string('namxuatban');
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
        Schema::dropIfExists('dbsach');
    }
}
