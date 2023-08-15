<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('anggota_divisi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_divisi');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('periode');
            $table->integer('id_status');
            $table->string('foto_anggota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_divisi');
    }
};
