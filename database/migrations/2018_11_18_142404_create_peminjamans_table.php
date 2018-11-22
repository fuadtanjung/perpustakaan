<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nik_pengguna');
            $table->unsignedInteger('id_buku');
            $table->Integer('status');
            
            $table->timestamps();

            $table->foreign('nik_pengguna')->references('nik')->on('penggunas');
            $table->foreign('id_buku')->references('id')->on('bukus');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjamans');
    }
}
