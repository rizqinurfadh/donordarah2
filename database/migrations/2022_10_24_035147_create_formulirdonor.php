<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulirdonor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulirdonor', function (Blueprint $table) {
            $table->id('id_formulir');
            $table->string('name');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('no_han');
            $table->string('beratbadan');
            $table->string('gender');
            $table->string('riwayat_penyakit');
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
        Schema::dropIfExists('formulirdonor');
    }
}
