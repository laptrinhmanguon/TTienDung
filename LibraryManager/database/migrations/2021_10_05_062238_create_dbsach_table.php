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
        Schema::create('dbsach', function (Blueprint $table) {
            $table->increments('ID_Sach');
            $table->string('TenSach',250);
            $table->string('TheLoai',250);
            $table->string('NhaXuatBan',250);
            $table->string('NamXuatBan');

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
