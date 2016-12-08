<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrasiRawatInapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('administrasi_rawat_inaps', function(Blueprint $table){
            $table->increments('id_pembayaran_inap');
            $table->unsignedInteger('id_rawat_inap');
            $table->integer('total_pembayaran');
            $table->enum('keterangan_pembayaran',['0','1']);
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
        Schema::drop('administrasi_rawat_inaps');
    }
}
