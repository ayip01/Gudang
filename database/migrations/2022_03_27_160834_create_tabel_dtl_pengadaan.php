<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelDtlPengadaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtl_pengadaan', function (Blueprint $table) {
            $table->increments('id_dtl_pengadaan');
			$table->integer('id_pengadaan');
			$table->integer('id_barang');
			$table->integer('jml_barang');
            $table->string('status', 50);
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
        Schema::dropIfExists('dtl_pengadaan');
    }
}
