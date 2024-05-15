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
            $table->id('NIK');
            $table->string('nama', 30);
            $table->string('jenis_kelamin', 20);
            $table->text('alamat');
            $table->string('status_kesehatan');
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
