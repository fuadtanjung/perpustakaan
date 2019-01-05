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
            $table->unsignedinteger('no_member_pengguna');
            $table->unsignedInteger('id_buku');
            $table->Integer('status');
            $table->timestamps();
            $table->foreign('no_member_pengguna')->references('no_member')->on('penggunas');
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
