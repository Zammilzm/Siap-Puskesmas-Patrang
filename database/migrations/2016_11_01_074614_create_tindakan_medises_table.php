<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTindakanMedisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
          Schema::create('tindakan_medises', function(Blueprint $table){
            $table->increments('id_tindakan_medis');
            $table->string('nama_tindakan_medis',30);
            $table->integer('tarif_layanan');
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
        Schema::drop('tindakan_medises');
    }
}
