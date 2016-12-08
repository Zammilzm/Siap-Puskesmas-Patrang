<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRujukansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rujukans', function (Blueprint $table) {
            $table->increments('id_rujukan');
            $table->unsignedInteger('id_pelayanan');
            $table->date('tanggal_rujukan');
            $table->string('keterangan');
            $table->enum('tempat_rujukan',['Rsud_Situbondo','Rsud_Jember','Rsud_Arjasa','Jember_Klinik','Rsud_Patrang','Rsud_Banyuwangi','Rsud_Malang']);
            $table->string('status_rujukan');
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
        Schema::drop('rujukans');
    }
}
