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
        Schema::create('muon_tra', function (Blueprint $table) {
            $table->id();
            $table->string('tendocgia');
            $table->string('madocgia');
            $table->string('lop');
            $table->string('tensach');
            $table->string('masach');
            $table->integer('sodienthoai');
            $table->string('sophieu');
            $table->string('thuthu');
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
