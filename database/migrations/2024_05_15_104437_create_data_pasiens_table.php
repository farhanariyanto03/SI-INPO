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
        Schema::create('data_lansias', function (Blueprint $table) {
            $table->unsignedBigInteger('NIK')->primary();
            $table->string('nama', 30);
            $table->string('jenis_kelamin', 20);
            $table->text('alamat');
            $table->string('no_hp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_lansias');
    }
};
