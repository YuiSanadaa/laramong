<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemohonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemohons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('alamat');
            $table->datetime('ttl');
            $table->integer('tinggi');
            $table->sting('pekerjaan');
            $table->enum('tertulis',['Gagal','Berhasil','Belum']);
            $table->enum('praktek',['Gagal','Berhasil','Belum']);
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
        Schema::dropIfExists('pemohons');
    }
}
