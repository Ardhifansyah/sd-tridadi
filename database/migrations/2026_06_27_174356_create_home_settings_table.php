<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('home_settings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kepala_sekolah')->nullable();
            $table->string('foto_kepala_sekolah')->nullable();
            $table->longText('sambutan')->nullable();
            $table->longText('visi')->nullable();
            $table->longText('misi')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('home_settings');
    }
};