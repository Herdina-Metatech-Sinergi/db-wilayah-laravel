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
        Schema::create('kelurahans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provinsi_id')->nullable();
            $table->foreign('provinsi_id')->references('id')->on('provinsis')->onDelete('cascade');
            $table->unsignedBigInteger('kabupaten_id')->nullable();
            $table->foreign('kabupaten_id')->references('id')->on('kabupatens')->onDelete('cascade');
            $table->unsignedBigInteger('kecamatan_id');
            $table->foreign('kecamatan_id')->references('id')->on('kecamatans')->onDelete('cascade');
            $table->string('nama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelurahans');
    }
};
