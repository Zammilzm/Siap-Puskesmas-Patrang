<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBpjsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bpjses', function(Blueprint $table){
            $table->increments('id_bpjs');
            $table->string('nama_bpjs',30);
            $table->enum('status',['0','1']);
            $table->date('tanggal_pembuatan');
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
        Schema::drop('bpjses');
    }
}
