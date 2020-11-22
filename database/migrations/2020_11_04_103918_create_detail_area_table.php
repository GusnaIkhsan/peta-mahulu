<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_area', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('kecamatan_id');
            $table->unsignedBigInteger('desa_id');
            $table->string('pola_ruang');
            $table->string('luas');
            $table->string('sumber');
            $table->string('keterangan');
            $table->longText('koordinat');
            $table->timestamps();
            $table->foreign('kecamatan_id')->references('id')->on('kecamatan')->onUpdate('cascade');
            $table->foreign('desa_id')->references('id')->on('desa')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_area');
    }
}
