<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResepObatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('resep_obats', function(Blueprint $table){
            $table->increments('id_resep');
            $table->unsignedInteger('id_pelayanan');
            $table->string('resep_obat');
            $table->string('resep_tersedia');
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
        Schema::drop('resep_obats');
    }
}
