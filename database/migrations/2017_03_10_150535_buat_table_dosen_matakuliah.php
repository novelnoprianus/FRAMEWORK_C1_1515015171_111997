<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableDosenMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen_matakuliah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dosen_id',false,true);
            $table->foreign('dosen_id')->references('id')->on('dosen');
            $table->integer('matakuliah_id',false,true);
            $table->foreign('matakuliah_id')->references('id')->on('matakuliah');
            $table->rememberToken();
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
        Schema::drop('dosen_matakuliah');
    }
}