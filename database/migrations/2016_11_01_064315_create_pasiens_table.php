<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('pasiens', function(Blueprint $table){
            $table->increments('id_pasien');
            $table->string('no_ktp',30);
            $table->string('no_kk',30);
            $table->string('nama_pasien',100);
            $table->string('alamat',100);
            $table->date('tanggal_lahir');
            $table->string('golongan_darah');
            $table->integer('umur');
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
        Schema::drop('pasiens');
    }
}
