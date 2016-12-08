<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('pegawais', function(Blueprint $table){
            $table->increments('id_pegawai');
            $table->string('nama_pegawai',50);
            $table->string('status_pegawai',50);
            $table->string('no_kk',30);
            $table->string('no_ktp',30);
            $table->string('alamat',100);
            $table->date('tanggal_lahir');
            $table->string('golongan_darah');
            $table->integer('umur');
            $table->string('lulusan',30);
            $table->string('asal_pendidikan',30);
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
          Schema::drop('pegawais');
    }
}
