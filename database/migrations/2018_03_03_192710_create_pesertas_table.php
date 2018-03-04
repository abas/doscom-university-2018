<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('nohp');
            $table->enum('status_peserta',['mahasiswa','pelajar','umum'])->default('umum');
            $table->text('alasan');

            $table->enum('status_pembayaran',['lunas','belum_lunas'])->default('belum_lunas');
            $table->integer('total_pembayaran')->default(0);
            $table->integer('kekurangan_pembayaran')->default(0);
            
            $table->enum('web',['true','false'])->default('false')->nullable();
            $table->enum('femdev',['true','false'])->default('false')->nullable();
            $table->enum('mobile',['true','false'])->default('false')->nullable();
            $table->enum('linux',['true','false'])->default('false')->nullable();
            $table->enum('net',['true','false'])->default('false')->nullable();
            $table->enum('inkscape',['true','false'])->default('false')->nullable();
            $table->enum('godot',['true','false'])->default('false')->nullable();

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
