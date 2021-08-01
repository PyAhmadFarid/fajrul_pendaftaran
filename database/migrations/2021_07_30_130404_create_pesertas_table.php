<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('nomer_hp')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('foto')->nullable();
            $table->string('bukti_pembayaran');
            $table->tinyInteger('gender')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('pesertas');
    }
}
