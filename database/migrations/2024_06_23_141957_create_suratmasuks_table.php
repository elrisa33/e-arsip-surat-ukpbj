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
        Schema::create('suratmasuks', function (Blueprint $table) {
            $table->id();
            $table->string('nomorberkas_sm');
            $table->text('alamat_pengirim');
            $table->date('tanggal_sm');
            $table->string('nomor_sm');
            $table->string('perihal_sm');
            $table->string('nomorpetunjuk_sm');
            $table->date('nomor_paket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratmasuks');
    }
};
