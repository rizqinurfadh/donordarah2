<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokdarah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stokdarah', function (Blueprint $table) {
            $table->id('id_darah');
            $table->string('jenis_tranfusi_darah');
            $table->string('golongan_darah');
            $table->string('jumlah_stok_darah');
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
        Schema::dropIfExists('stokdarah');
    }
}
