<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function(Blueprint $table){
            $table->increments('id_pendaftaran');
            $table->unsignedInteger('id_pasien');
            $table->unsignedInteger('id_poli');
            $table->enum('status',['0','1']);
            $table->unsignedInteger('id_bpjs');
            $table->date('tanggal_periksa');
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
        Schema::drop('pendaftarans');
    }
}
