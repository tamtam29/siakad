<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatakuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_matakuliah')->nullable();
            $table->string('nama')->nullable();
            $table->string('sks')->nullable();
            $table->string('semester')->nullable();
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
        Schema::dropIfExists('matakuliah');
    }
}
