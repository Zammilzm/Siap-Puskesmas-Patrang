<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelayanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('pelayanans', function(Blueprint $table){
            $table->increments('id_pelayanan');
            $table->unsignedInteger('id_pendaftaran');
            $table->string('keluhan');
            $table->string('diagnosa_penyakit');
            $table->unsignedInteger('id_pegawai');
            $table->string('saran_dokter');
            $table->tinyInteger('rawat_inap');
            $table->tinyInteger('rekam_medis');
            $table->tinyInteger('rujukan');
            $table->tinyInteger('resep');
            $table->tinyInteger('uji_lab');
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
      Schema::drop('pelayanans');
    }
}
