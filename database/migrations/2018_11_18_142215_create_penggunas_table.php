<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenggunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggunas', function (Blueprint $table) {
            $table->char('nik');
            $table->string('nama');
            $table->string('alamat');
            $table->integer('nohp');
            $table->string('email')->unique();
            $table->string('foto');
            
            $table->timestamps();

            $table->primary('nik');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penggunas');
    }
}
