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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->text('sejarah');
            $table->text('visi');
            $table->text('misi');
            $table->text('kontak');
            $table->text('foto_logo')->nullable();
            $table->text('foto_angkatan')->nullable();
            $table->text('foto_ketua')->nullable();
            $table->text('foto_wakil')->nullable();
            $table->text('foto_sekretaris')->nullable();
            $table->text('foto_bendahara')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
