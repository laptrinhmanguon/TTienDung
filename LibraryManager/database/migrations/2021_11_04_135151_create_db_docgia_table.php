<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbDocgiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_gia', function (Blueprint $table) {
            $table->id();
            $table->string('tendocgia');
            $table->string('madocgia');
            $table->string('diachi');
            $table->integer('sodienthoai');
            $table->string('sachdangmuon');
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
        Schema::dropIfExists('db_docgia');
    }
}
