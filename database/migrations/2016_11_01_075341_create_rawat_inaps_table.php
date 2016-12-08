<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRawatInapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

       Schema::create('rawat_inaps', function(Blueprint $table){
        $table->increments('id_rawat_inap');
        $table->unsignedInteger('id_pelayanan');
        $table->unsignedInteger('id_kamar');
        $table->integer('lama_menginap');
        $table->text('Keterangan_Pelayanan');
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
        Schema::drop('rawat_inaps');
    }
}
