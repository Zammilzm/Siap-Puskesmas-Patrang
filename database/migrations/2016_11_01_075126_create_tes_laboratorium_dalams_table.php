<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTesLaboratoriumDalamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('tes_laboratorium_dalams', function(Blueprint $table){
            $table->increments('id_tes_laboran_dalam');
            $table->unsignedInteger('id_pelayanan');
            $table->date('tanggal_tes');
            $table->string('hasil_tes_lab');
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
        Schema::drop('tes_laboratorium_dalams');
    }
}
