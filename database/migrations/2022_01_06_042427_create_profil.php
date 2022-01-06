<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perangkat_daerah')->unique();
            $table->string('nama_pemimpin');
            $table->string('alamat_kantor');
            $table->string('telepon');
            $table->string('email');
            $table->string('nama_pengelola');
            $table->string('nomor_pengelola');
            $table->string('email_pengelola');
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
        Schema::dropIfExists('profil');
    }
}
