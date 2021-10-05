<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbMuonSachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_muon_sach', function (Blueprint $table) {
            $table->increments('id_muon');
            $table->integer('id_nguoidung')->unique();
            $table->integer('id_sach');
            $table->dateTime('ngaymuon');
            $table->unsignedInteger('id_K_Mmuonsach');
            $table->foreign('id_K_Mmuonsach')->references('id_sach')->on('dbsach');
            $table->unsignedInteger('id_K_Mnguoidung');
            $table->foreign('id_K_Mnguoidung')->references('id_nguoidung')->on('db_nguoidung');
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
        Schema::dropIfExists('db_muon_sach');
    }
}
