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
        Schema::create('detail_models', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('username');
            $table->string('prodi');
            $table->string('angkatan');
            $table->date('tanggalLahir');
            $table->string('kabKota');
            $table->string('tahunLulus');
            $table->enum('jenisKelamin', ['laki-laki', 'perempuan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_models');
    }
};
