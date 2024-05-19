<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pemeriksaans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('NIK');
            $table->integer('tb');
            $table->integer('bb');
            $table->integer('tekanan_darah');
            $table->string('hasil_pemeriksaan');
            $table->integer('kolestrol');
            $table->string('hasil_pemeriksaan1');
            $table->integer('gula_darah');
            $table->string('hasil_pemeriksaan2');
            $table->date('tggl_pemeriksaan');
            $table->timestamps();

            $table->foreign('NIK')->references('NIK')->on('data_lansias')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaans');
    }
};
