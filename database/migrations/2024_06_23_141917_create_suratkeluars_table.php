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
        Schema::create('suratkeluars', function (Blueprint $table) {
            $table->id();
            $table->string('nomorberkas_sk');
            $table->text('alamat_penerima');
            $table->date('tanggal_sk');
            $table->string('perihal_sk');
            $table->string('nomorpetunjuk_sk');
            $table->string('nomor_sk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratkeluars');
    }
};
